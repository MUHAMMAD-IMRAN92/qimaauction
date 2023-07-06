<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Models\Governorate;

class RegionController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    public function index()
    {
        // return $this->user;
        return view('admin.region.index');
    }
    public function allRegion(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $flavour_count = Region::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        })->count();
        // })->where('is_hidden', '0')->count();
        $region = Region::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        });

        $region = $region->skip((int)$start)->take((int)$length)->get();
        // $region = $region->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $flavour_count,
            'recordsFiltered' => $flavour_count,
            'data' => $region,
        );
        return response()->json($data);
    }
    public function create(Request $request)
    {
        $governorator = Governorate::where('is_hidden', '0')->get();
        return view('admin.region.create', [
            'governorator' => $governorator,
        ]);
    }
    public function save(Request $request)
    {

        $region = new  Region();
        $region->title = $request->title;
        $region->gov_id = $request->governorate_id;
        $region->save();
        return redirect('/region/index');
    }
    public function delete(Request $request, $id)
    {
        $region = Region::find(base64_decode($id));

        if ($region) {
            $region->is_hidden = '1';
            $region->save();
        }
        // return $region;
        return redirect('/region/index')->with('msg', 'region Deleted Successfully');
    }
    public function edit(Request $request, $id)
    {
        $region = Region::find(base64_decode($id));
        $governorator = Governorate::where('is_hidden', '0')->get();
        return view('admin.region.edit', [
            'region' =>  $region, 'governorator' => $governorator,
        ]);
    }
    public function update(Request $request)
    {
        $region = Region::find($request->id);
        $region->title = $request->title;
        $region->gov_id = $request->governorate_id;
        $region->save();
        return redirect('/region/index');
    }
}
