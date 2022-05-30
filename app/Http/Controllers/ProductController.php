<?php

namespace App\Http\Controllers;

use App\Mail\JuryMail;
use App\Models\Category;
use App\Models\Flavour;
use App\Models\Jury;
use App\Models\Tag;
use App\Models\Origin;
use App\Models\Product;
use App\Models\Image;
use App\Models\SentToJury;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
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
        return view('admin.product.index');
    }
    public function allProduct(Request $request)
    {
        // dd(Product::with('category', 'origin')->get());
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $product_count = Product::when($search, function ($q) use ($search) {
            $q->where('product_title', 'LIKE', "%$search%");
        })->count();
        $product = Product::when($search, function ($q) use ($search) {
            $q->where('product_title', 'LIKE', "%$search%");
        })->with('category', 'origin')->whereHas('category')->whereHas('origin');

        $product = $product->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->get();

        $data = array(
            'draw' => $draw,
            'recordsTotal' => $product_count,
            'recordsFiltered' => $product_count,
            'data' => $product,
        );
        return response()->json($data);
    }
    public function create(Request $request)
    {
        $category = Category::where('is_hidden', '0')->get();
        $flavour = Flavour::where('is_hidden', '0')->get();
        $origin = Origin::where('is_hidden', '0')->get();
        return view('admin.product.create', [
            'category' => $category,
            'flavour' => $flavour,
            'origin' => $origin
        ]);
    }
    public function save(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'pro_category' => 'required',
            'pro_flavour' => 'required',
            'pro_origin' => 'required',
        ]);
        $product = new  Product();
        $product->product_title = $request->title;
        $product->product_description = $request->description;
        $product->user_id = $this->user->id;
        $product->category_id = $request->pro_category;
        $product->flavour_id = $request->pro_flavour;
        $product->origin_id = $request->pro_origin;
        $product->save();

        foreach ($request->image as $img) {
            $fileName = $img->getClientOriginalName();
            $img->storeAs(
                'product',
                $fileName,
                'public'
            );
            $productImage = new Image();
            $productImage->product_id =  $product->id;
            $productImage->image_name = $fileName;
            $productImage->save();
        }

        return redirect('/product/index');
    }
    public function delete(Request $request, $id)
    {
        $product = Product::find(base64_decode($id));
        $product->is_hidden = '1';
        $product->save();
        return redirect('/product/index')->with('msg', 'product Deleted Successfully');
    }
    public function edit(Request $request, $id)
    {
        $category = Category::where('is_hidden', '0')->get();
        $flavour = Flavour::where('is_hidden', '0')->get();
        $origin = Origin::where('is_hidden', '0')->get();
        $product = product::where('id', base64_decode($id))->with('images')->first();
        // return $product;
        return view('admin.product.edit', [
            'product' =>  $product,
            'category' => $category,
            'flavour' => $flavour,
            'origin' => $origin
        ]);
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'pro_category' => 'required',
            'pro_flavour' => 'required',
            'pro_origin' => 'required',
        ]);
        $product = product::find($request->id);
        $product->product_title = $request->title;
        $product->product_description = $request->description;
        $product->user_id = $this->user->id;
        $product->category_id = $request->pro_category;
        $product->flavour_id = $request->pro_flavour;
        $product->origin_id = $request->pro_origin;
        $product->save();
        if ($request->image) {
            foreach ($request->image as $img) {
                $fileName = $img->getClientOriginalName();
                $img->storeAs(
                    'product',
                    $fileName,
                    'public'
                );
                $productImage = new Image();
                $productImage->product_id =  $product->id;
                $productImage->image_name = $fileName;
                $productImage->save();
            }
        }


        return redirect('/product/index');
    }
    public function deleteImage($id)
    {
        Image::where('id', $id)->delete();

        return back()->with('msg', 'Image Has Deleted');
    }
    public function view($id)
    {
        $jury = Jury::where('is_hidden', '0')->get();
        $product = product::where('id', base64_decode($id))->where('is_hidden', '0')->with('category', 'origin')->first();
        return view('admin.product.view_product', [
            'product' =>  $product,
            'juries' => $jury
        ]);
    }
    public function SentToJury(Request $request)
    {
        $sampleArr = explode(',', $request->samples);
        $juries  = $request->jury;
        $tempLink = base64_encode(url('jury/link/give_review/' . rand()));
        foreach ($juries as $jury) {
            // foreach ($sampleArr as $sample) {
            $sampleSent = new SentToJury();
            $sampleSent->jury_id = $jury;
            $sampleSent->product_id = $request->product_id;
            $sampleSent->temporary_link = $tempLink;
            $sampleSent->samples =  $request->samples;
            $sampleSent->message = $request->msg;
            $sampleSent->save();
            // }
            $jury =    Jury::find($sampleSent->jury_id);
            Mail::to($jury->email)->send(new JuryMail($jury));
        }

        return redirect('/product/index');
    }
    public function review(Request $request, $link, $pId, $jId)
    {
        $tags = Tag::where('jury_id',$jId)->get();
           $juery = Jury::where('ID',$jId)->first();
           $name = $juery->name;
        $sampleSent = SentToJury::where('jury_id', $request->jId)
                                  ->where('product_id', $request->pId)
                                  ->where('temporary_link', $request->link)
                                  ->where('is_hidden','0')
                                  ->first();
        if ($sampleSent) {
            if ($sampleSent->is_hidden == '1') {
                return view('admin.jury.alredy_submit');
            } else {
                $samplesArr = explode(',', $sampleSent->samples);
                return view('admin.jury.form', [
                    'productId' => $pId,
                    'juryId' =>  $jId,
                    'juryName' => $name,
                    'tags' => $tags,
                    'link' => $link,
                    'sampleName' => $sampleSent->samples,
                    'sentSampleId' => $sampleSent->id,  
                    'samples' => $samplesArr
                ]);
            }
        }
    }
}
