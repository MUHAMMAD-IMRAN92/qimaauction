<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class VillageController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    public function index()
    {
        // return $this->user;   
        return view('admin.village.index');
    }
    public function allVillage(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $flavour_count = Village::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        })->where('is_hidden', '0')->count();
        $village = Village::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        });

        $village = $village->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $flavour_count,
            'recordsFiltered' => $flavour_count,
            'data' => $village,
        );
        return response()->json($data);
    }
    public function create(Request $request)
    {
        return view('admin.village.create');
    }
    public function save(Request $request)
    {
        
        $village = new  Village();
        $village->title = $request->title;
        $village->save();
        return redirect('/village/index');
    }
    public function delete(Request $request, $id)
    {
        $village = Village::find(base64_decode($id));
    
        if ($village) {
            $village->is_hidden = '1';
            $village->save();
        }
        // return $village;
        return redirect('/village/index')->with('msg', 'village Deleted Successfully');
    }
    public function edit(Request $request, $id)
    {
        $village = Village::find(base64_decode($id));

        return view('admin.village.edit', [
            'village' =>  $village,
        ]);
    }
    public function update(Request $request)
    {
        $village = Village::find($request->id);
        $village->title = $request->title;
        $village->save();
        return redirect('/village/index');
    }
}
