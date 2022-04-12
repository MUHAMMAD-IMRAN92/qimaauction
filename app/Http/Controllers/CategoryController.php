<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->middleware(function ($request , $next)
        {
            $this->user = Auth::user();   
            return $next($request);
        });
         
    }
    public function index(){
        // return $this->user;   
        return view('admin.categories.index');
    }
    public function allCategory(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $categories_count = Category::when($search , function($q) use( $search){
            $q->where('category_title' , 'LIKE' , "%$search%")->where('is_hidden' , '0');
        })->count();
        $categories = Category::when($search , function($q) use( $search){
            $q->where('category_title' , 'LIKE' , "%$search%");
        });

        $categories = $categories->where('is_hidden' , '0')->skip((int)$start)->take((int)$length)->get();  
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $categories_count,
            'recordsFiltered' => $categories_count,
            'data' => $categories,
        );
       return response()->json($data);
    }
    public function create(Request $request)
    {
        return view('admin.categories.create');
    }
    public function save(Request $request)
    {
        $category = new  Category();
        $category->category_title = $request->title;
        $category->category_description = $request->description;
        if($request->has('image')){
            $fileName=$request->image->getClientOriginalName();
             $request->file('image')->storeAs(
                'category',
                $fileName,
                'public'
            );
            $category->category_image=$fileName;

        }
        $category->save();
        return redirect('/categories/index');
    }
    public function delete(Request $request , $id)
    {   
        $category =Category::find(base64_decode($id));
        $category->delete();
        return redirect('/categories/index')->with('msg' , 'Category Deleted Successfully');
    }
    public function edit(Request $request , $id)
    {  
        $category = Category::find(base64_decode($id));
      
        return view('admin.categories.edit' ,[
            'category' =>  $category,
        ]);
    }
    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->category_title = $request->title;
        $category->category_description = $request->description;
        if($request->has('image')){
            $fileName=$request->image->getClientOriginalName();
             $request->file('image')->storeAs(
                'category',
                $fileName,
                'public'
            );
            $category->category_image=$fileName;
        }
        $category->save();
        return redirect('/categories/index');
    }
}