<?php

namespace App\Http\Controllers;

use App\Models\Origin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OriginController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    public function index()
    {
        // return $this->user;   
        return view('admin.origin.index');
    }
    public function allorigin(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $origin_count = Origin::when($search, function ($q) use ($search) {
            $q->where('region_name', 'LIKE', "%$search%");
        })->where('is_hidden', '0')->count();
        $origin = Origin::when($search, function ($q) use ($search) {
            $q->where('region_name', 'LIKE', "%$search%");
        });

        $origin = $origin->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $origin_count,
            'recordsFiltered' => $origin_count,
            'data' => $origin,
        );
        return response()->json($data);
    }
    public function create(Request $request)
    {
        return view('admin.origin.create');
    }
    public function save(Request $request)
    {
        $origin = new  Origin();
        $origin->region_name = $request->title;
        $origin->region_description = $request->description;
        if ($request->has('image')) {
            $fileName = $request->image->getClientOriginalName();
            $request->file('image')->storeAs(
                'origin',
                $fileName,
                'public'
            );
            $origin->region_image = $fileName;
        }
        $origin->save();
        return redirect('/origin/index');
    }
    public function delete(Request $request, $id)
    {
        $origin = Origin::find(base64_decode($id));
        $origin->delete();
        return redirect('/origin/index')->with('msg', 'origin Deleted Successfully');
    }
    public function edit(Request $request, $id)
    {
        $origin = Origin::find(base64_decode($id));

        return view('admin.origin.edit', [
            'origin' =>  $origin,
        ]);
    }
    public function update(Request $request)
    {
        $origin = Origin::find($request->id);
        $origin->region_name = $request->title;
        $origin->region_description = $request->description;
        if ($request->has('image')) {
            $fileName = $request->image->getClientOriginalName();
            $request->file('image')->storeAs(
                'origin',
                $fileName,
                'public'
            );
            $origin->region_image = $fileName;
        }
        $origin->save();
        return redirect('/origin/index');
    }
}
