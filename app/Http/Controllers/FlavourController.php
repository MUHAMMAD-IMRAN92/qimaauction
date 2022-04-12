<?php

namespace App\Http\Controllers;

use App\Models\Flavour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FlavourController extends Controller
{
    private $user;

    public function __construct()
    {
         $this->user = Auth::user();   
         
    }
    public function index(){
        // return $this->user;   
        return view('admin.flavour.index');
    }
    public function allflavour(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $flavour_count = Flavour::when($search , function($q) use( $search){
            $q->where('flavour_title' , 'LIKE' , "%$search%");
        })->where('is_hidden' , '0')->count();
        $flavour = Flavour::when($search , function($q) use( $search){
            $q->where('flavour_title' , 'LIKE' , "%$search%");
        });

        $flavour = $flavour->where('is_hidden' , '0')->skip((int)$start)->take((int)$length)->get();  
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $flavour_count,
            'recordsFiltered' => $flavour_count,
            'data' => $flavour,
        );
       return response()->json($data);
    }
    public function create(Request $request)
    {
        return view('admin.flavour.create');
    }
    public function save(Request $request)
    {
        $flavour = new  Flavour();
        $flavour->flavour_title = $request->title;
        $flavour->flavour_description = $request->description;
       
        $flavour->save();
        return redirect('/flavour/index');
    }
    public function delete(Request $request , $id)
    {   
        $flavour =Flavour::find(base64_decode($id));
        $flavour->delete();
        return redirect('/flavour/index')->with('msg' , 'flavour Deleted Successfully');
    }
    public function edit(Request $request , $id)
    {  
        $flavour = Flavour::find(base64_decode($id));
      
        return view('admin.flavour.edit' ,[
            'flavour' =>  $flavour,
        ]);
    }
    public function update(Request $request)
    {
        $flavour = Flavour::find($request->id);
        $flavour->flavour_title = $request->title;
        $flavour->flavour_description = $request->description;
        
        $flavour->save();
        return redirect('/flavour/index');
    }
}
