<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Governorate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GovernorateController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    public function index()
    {
        // return $this->user;
        return view('admin.governorate.index');
    }
    public function allgovernorator(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $flavour_count = Governorate::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        })->count();
        // })->where('is_hidden', '0')->count();
        $governorate = Governorate::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        });

        // $governorate = $governorate->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->get();
        $governorate = $governorate->skip((int)$start)->take((int)$length)->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $flavour_count,
            'recordsFiltered' => $flavour_count,
            'data' => $governorate,
        );
        return response()->json($data);
    }
    public function create(Request $request)
    {
        $country = Country::get();
        return view('admin.governorate.create', [
            'country' => $country
        ]);
    }
    public function save(Request $request)
    {

        $governorate = new  Governorate();
        $governorate->title = $request->title;
        $governorate->count_id = $request->count_id;
        $governorate->description = $request->description;
        $governorate->save();
        return redirect('/governorate/index');
    }
    public function delete(Request $request, $id)
    {
        $governorate = Governorate::find(base64_decode($id));

        if ($governorate) {
            $governorate->is_hidden = '1';
            $governorate->save();
        }
        // return $governorate;
        return redirect('/governorate/index')->with('msg', 'governorate Deleted Successfully');
    }
    public function edit(Request $request, $id)
    {
        $governorate = Governorate::find(base64_decode($id));
        $country = Country::get();
        return view('admin.governorate.edit', [
            'governorate' =>  $governorate, 'country' => $country
        ]);
    }
    public function update(Request $request)
    {
        $governorate = Governorate::find($request->id);
        $governorate->title = $request->title;
        $governorate->count_id = $request->count_id;
        $governorate->description = $request->description;

        $governorate->save();
        return redirect('/governorate/index');
    }
}
