<?php

namespace App\Http\Controllers;

use App\Mail\JuryMail;
use App\Models\Auction;
use App\Models\AuctionProduct;
use App\Models\Category;
use App\Models\Flavour;
use App\Models\Genetic;
use App\Models\Governorate;
use App\Models\Jury;
use App\Models\Tag;
use App\Models\Origin;
use App\Models\Product;
use App\Models\Region;
use App\Models\Image;
use App\Models\OpenCupping;
use App\Models\Process;
use App\Models\Review;
use App\Models\SentToJury;
use App\Models\Village;
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
        })->with('category', 'origin', 'flavor' , 'governorate' , 'region' , 'village')->whereHas('category');

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
        $region = Region::where('is_hidden', '0')->get();
        $genetics = Genetic::where('is_hidden', '0')->get();
        $village = Village::where('is_hidden', '0')->get();
        $governorator = Governorate::where('is_hidden', '0')->get();
        $auctions = Auction::all();
        return view('admin.product.create', [
            'category' => $category,
            'flavour' => $flavour,
            'governorator' => $governorator,
            'village' => $village,
            'region' => $region,
            'origin' => $origin,
            'genetics' => $genetics,
            'auctions' => $auctions,
        ]);
    }
    public function save(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            // 'table' => 'required',
            // 'sample' => 'required',
            // 'region_id' => 'required',
            // 'category_id' => 'required',
            // 'pro_lot_type' => 'required',
            // 'pro_process' => 'required',
            // 'village_id' => 'required',
            'governorate_id' => 'required',
            // 'postion' => 'required',
            // 'pro_origin' => 'required',
        ]);

        $product = new  Product();
        $product->product_title = $request->title;
        $product->sample = $request->sample;
        $product->postion = $request->postion;
        $product->table = $request->table;
        $product->governorate_id = isset($request->governorate_id) ? $request->governorate_id : '1';;
        $product->village_id = $request->village_id;
        $product->region_id = $request->region_id;
        $product->genetic_id = $request->genetic_id;
        $product->product_title = $request->title;
        $product->product_description = $request->description ?? '';
        $product->user_id = $this->user->id;
        $product->category_id = isset($request->category_id) ? $request->category_id : '1';
        $product->flavour_id = isset($request->flavour_id) ? $request->flavour_id : '1';
        $product->pro_lot_type  = $request->pro_lot_type;
        $product->pro_process  = $request->pro_process;
        $product->origin_id =  2;
        $product->save();

        // foreach ($request->image as $img) {
        //     $fileName = $img->getClientOriginalName();
        //     $img->storeAs(
        //         'product',
        //         $fileName,
        //         'public'
        //     );
        //     $productImage = new Image();
        //     $productImage->product_id =  $product->id;
        //     $productImage->image_name = $fileName;
        //     $productImage->save();
        // }
        if ($request->auction) {
            foreach ($request->auction as $auct) {
                $auctionproductUpdate = AuctionProduct::where('product_id', $request->product_id)->where('auction_id', $auct)->updateOrCreate(
                    [
                        'product_id' => $product->id,
                        'village' => $product->village->title,
                        'auction_id' => $auct,
                        'region' => $product->region->title,
                        'governorate' => $product->governorate->title,
                        'name' => $request->title,

                    ]
                );
            }
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
        $region = Region::where('is_hidden', '0')->get();
        $village = Village::where('is_hidden', '0')->get();
        $governorator = Governorate::where('is_hidden', '0')->get();
        $auctions = Auction::all();
        // return $product;
        return view('admin.product.edit', [
            'product' =>  $product,
            'category' => $category,
            'flavour' => $flavour,
            'governorator' => $governorator,
            'village' => $village,
            'region' => $region,
            'origin' => $origin,
            'auctions' => $auctions,
        ]);
    }
    public function update(Request $request)
    {
        // $validated = $request->validate([
        //     'title' => 'required|max:255',
        //     'description' => 'required',
        //     'pro_category' => 'required',
        //     'pro_flavour' => 'required',
        //     'pro_origin' => 'required',
        // ]);
        $product = Product::find($request->id);
        $product->product_title = $request->title;
        $product->sample = $request->sample;
        $product->postion = $request->postion;
        $product->table = $request->table;
        $product->governorate_id = isset($request->governorate_id) ? $request->governorate_id : '1';;
        $product->village_id = $request->village_id;
        $product->region_id = $request->region_id;
        $product->genetic_id = $request->genetic_id;
        $product->product_title = $request->title;
        $product->product_description = $request->description;
        $product->user_id = $this->user->id;
        $product->category_id = isset($request->category_id) ? $request->category_id : '1';
        $product->flavour_id = isset($request->flavour_id) ? $request->flavour_id : '1';
        $product->pro_lot_type  = $request->pro_lot_type;
        $product->pro_process  = $request->pro_process;
        $product->save();
        // if ($request->image) {
        //     foreach ($request->image as $img) {
        //         $fileName = $img->getClientOriginalName();
        //         $img->storeAs(
        //             'product',
        //             $fileName,
        //             'public'
        //         );
        //         $productImage = new Image();
        //         $productImage->product_id =  $product->id;
        //         $productImage->image_name = $fileName;
        //         $productImage->save();
        //     }
        // }

        if ($request->auction) {
            foreach ($request->auction as $auct) {
                $auctionproductUpdate = AuctionProduct::where('product_id', $request->product_id)->where('auction_id', $auct)->updateOrCreate(
                    [
                        'product_id' => $product->id,
                        'village' => $product->village->title,
                        'auction_id' => $auct,
                        'region' => $product->region->title,
                        'governorate' => $product->governorate->title,
                        'name' => $request->title,

                    ]
                );
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
        $product = product::where('id', base64_decode($id))
            ->where('is_hidden', '0')->with('category', 'origin')->first();
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
    // public function subform(Request $request)
    // {
    //     $sampleSent = SentToJury::where('id', $request->id)->where('jury_id', $request->juryId)
    //       ->where('is_hidden','0')
    //       ->first();
    //       return view('admin.jury.form', [
    //         'productId' => 1,
    //         'juryId' =>  $sampleSent->jury_id,
    //         'juryName' => $name,
    //         'tags' => $tags,
    //         'alltablesamples'=> $alltablesamples,
    //         'link' => '$link',
    //         'sampleName' => $sampleSent->samples,
    //         'sentSampleId' => $sampleSent->id,
    //         'samples' => $samplesArr
    //     ]);
    // }

    public function review(Request $request)
    {
        $tags = Tag::where('jury_id', $request->juryId)->get();
        $juery = Jury::where('ID', $request->juryId)->first();
        $name = $juery->name;
        $company = $juery->company;
        $auctionId = $request->auctionId;
        $alltablesamples = SentToJury::join('products', 'products.id', 'sample_sent_to_jury.product_id')
            ->join('juries', 'juries.id', 'sample_sent_to_jury.jury_id')
            ->select(
                'products.id as productId',
                'products.product_title as productTitle',
                'sample_sent_to_jury.id as sampleId',
                'sample_sent_to_jury.jury_id as juryId',
                'sample_sent_to_jury.samples as samples',
                'sample_sent_to_jury.tables as sampleTable',
                'juries.name as juryName',
                'sample_sent_to_jury.is_hidden'
            )
            ->where('sample_sent_to_jury.jury_id', $request->juryId)->where('auction_id', $auctionId)
            ->where('sample_sent_to_jury.tables', $request->table)->orderByRaw('CAST(sample_sent_to_jury.postion AS unsigned)')
            // ->where('sample_sent_to_jury.is_hidden', '0')
            ->get();
        if (isset($request->sampleId)) {
            $firstsample = SentToJury::where('sample_sent_to_jury.id', $request->sampleId)
                ->first();
            $review = Review::where('sample_id', $request->sampleId)
                ->first();
        } else {
            $review = null;
            $firstsample = $alltablesamples->first();

            if (!isset($firstsample)) {
                $firstsample = SentToJury::where('sample_sent_to_jury.jury_id', $request->juryId)
                    ->first();

                return redirect()->route('juryLinks', ['id' => encrypt($firstsample->jury_id)]);
            }
        }
        $sampleReview1 = Review::where('sample_id', $firstsample->id)->first();

        if (isset($sampleReview1)) {
            $sampleReview = $sampleReview1;
        } else {
            $sampleReview = null;
        }
        if ($firstsample) {
            $productdata = Product::where('id', $firstsample->product_id)->first();
            // if ($firstsample->is_hidden == '1') {
            //     return view('admin.jury.alredy_submit');
            // } else
            // {
            $lastSampleId = SentToJury::where('jury_id', $request->juryId)->where('tables', $request->table)->where('auction_id', $auctionId)->orderByRaw('CAST(sample_sent_to_jury.postion AS unsigned) desc')->first();
            $previous = SentToJury::where('jury_id', $request->juryId)->where('tables', $request->table)->where('auction_id', $auctionId)->orderByRaw('CAST(sample_sent_to_jury.postion AS unsigned) asc')->first();
            $next = SentToJury::where('jury_id', $request->juryId)->where('tables', $request->table)->where('auction_id', $auctionId)->orderByRaw('CAST(sample_sent_to_jury.postion AS unsigned) desc')->first();
            $samplesArr = explode(',', $firstsample->samples);

            return view('admin.jury.form2', [
                'productId' => $firstsample->product_id ?? $firstsample->productId,
                'juryId' =>  $firstsample->jury_id ?? $firstsample->juryId,
                'juryName' => $name,
                'juryCompany' => $company,
                'table' => $request->table ?? $firstsample->sampleTable,
                'firstsample' => $firstsample,
                'tags' => $tags,
                'reviewdata' => $review,
                'productdata' => $productdata,
                'alltablesamples' => $alltablesamples,
                'link' => $firstsample->temporary_link,
                'sampleName' => $firstsample->samples,
                'sentSampleId' => $firstsample->id,
                'samples' => $samplesArr,
                'sampleReview' => $sampleReview,
                'lastSample' => $lastSampleId,
                'previous' =>  $previous,
                'next' => $next,
                'auctionId' => $auctionId
            ]);
            // }
        }
    }
}
