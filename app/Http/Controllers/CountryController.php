<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    public function index()
    {
        // return $this->user;
        return view('admin.country.index');
    }
    public function allcountry(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $flavour_count = Country::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        })->count();
        // })->where('is_hidden', '0')->count();
        $governorate = Country::when($search, function ($q) use ($search) {
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
        return view('admin.country.create', [
            'country' => $country
        ]);
    }
    public function save(Request $request)
    {

        $governorate = new  Country();
        $governorate->title = $request->title;
        $governorate->description = $request->description;
        $governorate->save();
        return redirect('/country/index');
    }
    public function delete(Request $request, $id)
    {
        $governorate = Country::find(base64_decode($id));

        if ($governorate) {
            $governorate->is_hidden = '1';
            $governorate->save();
        }
        // return $governorate;
        return redirect('/country/index')->with('msg', 'governorate Deleted Successfully');
    }
    public function edit(Request $request, $id)
    {
        $country = Country::find(base64_decode($id));
        // $country = Country::get();
        return view('admin.country.edit', [
            'country' =>  $country
        ]);
    }
    public function update(Request $request)
    {
        $governorate = Country::find($request->id);
        $governorate->title = $request->title;
        $governorate->description = $request->description;

        $governorate->save();
        return redirect('/country/index');
    }
}
