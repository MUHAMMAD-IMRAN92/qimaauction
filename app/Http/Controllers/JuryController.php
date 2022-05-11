<?php

namespace App\Http\Controllers;

use App\Models\Jury;
use App\Models\SentToJury;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JuryController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }
    public function index()
    {
        // return $this->user;   
        return view('admin.jury.index');
    }
    public function alljury(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $jury_count = Jury::when($search, function ($q) use ($search) {
            $q->where('name', 'LIKE', "%$search%");
        })->where('is_hidden', '0')->count();
        $juries = Jury::when($search, function ($q) use ($search) {
            $q->where('name', 'LIKE', "%$search%");
        });

        $juries = $juries->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $jury_count,
            'recordsFiltered' => $jury_count,
            'data' => $juries,
        );
        return response()->json($data);
    }
    public function create(Request $request)
    {
        return view('admin.jury.create');
    }
    public function save(Request $request)
    {
        $jury = new  Jury();
        $jury->name = $request->name;
        $jury->email = $request->email;
        $jury->phone = $request->phone;
        $jury->address = $request->address;

        $jury->save();
        return redirect('/jury/index');
    }
    public function delete(Request $request, $id)
    {
        $jury = Jury::find(base64_decode($id));
        $jury->delete();
        return redirect('/jury/index')->with('msg', 'jury Deleted Successfully');
    }
    public function edit(Request $request, $id)
    {
        $jury = Jury::find(base64_decode($id));

        return view('admin.jury.edit', [
            'jury' =>  $jury,
        ]);
    }
    public function update(Request $request)
    {
        $jury = Jury::find($request->id);
        $jury->name = $request->name;
        $jury->email = $request->email;
        $jury->phone = $request->phone;
        $jury->address = $request->address;
        $jury->save();
        return redirect('/jury/index');
    }

    public function juryLinks(Request $request, $id)
    {
        $juryId = decrypt($id);
        $jury = Jury::find($juryId);

        if($jury){
        $samples = SentToJury::where('jury_id', $juryId)->where('is_hidden', '0')->get();
        return view('admin.jury.jury_links', [
            'samples' => $samples
        ]);
        }
        else{
            return view('admin.404');
        }
    }
}
