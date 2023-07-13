<?php

namespace App\Http\Controllers;

use App\Models\OpenCupping;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Auction;
use App\Models\OpenCuppingProduct;
use App\Models\Review;
use App\Models\OpenCuppingReview;
use App\Models\OpenCuppingUser;
use App\Models\User;
use Illuminate\Support\Str;
use DB;
use Faker\Generator as Faker;

class OpenCuppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.continue_cupping');
    }


    public function openCuppingUser(Request $request, Faker $faker)
    {
        $user = OpenCuppingUser::where('email', $request->email)->first();
        if (isset($user)) {
            return redirect()->route('show_cupping', $user->id);
        } else {
            $user = OpenCuppingUser::create([
                'name' => isset($request->name) ? $request->name : $faker->name,
                'email' => isset($request->email) ? $request->email : $faker->unique()->email,
            ]);
            $opencuppings = OpenCupping::where('user_id', 0)->get();
            foreach ($opencuppings as $key => $value) {
                $sampleSent = new OpenCupping();
                $sampleSent->table = $value->table;
                $sampleSent->user_id = $user->id;
                $sampleSent->product_id =  $value->product_id;
                $sampleSent->postion = $value->postion;
                $sampleSent->auction_id = $value->auction_id;
                $sampleSent->samples = $value->samples;
                $sampleSent->save();
            }
        }
        return redirect()->route('show_cupping', $user->id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $auctions = Auction::all();

        $openCuppingProduct = OpenCuppingProduct::find($id);
        $products = Product::whereIn('id', explode(',', $openCuppingProduct->products))->get();
        $cuppingProducts =  OpenCupping::where('auction_id',  $openCuppingProduct->auction_id)->get();

        return view('admin.jury.open_cupping', [
            'products' => $products,
            'auctions' => $auctions,
            'openCupping' => $openCuppingProduct,
            'cuppingProducts' => $cuppingProducts
        ]);
    }
    public function createWithProduct()
    {
        $products = Product::orderBy('postion', 'asc')->get();
        $auctions = Auction::all();
        return view('admin.jury.new_open_cupping', [
            'products' => $products,
            'auctions' => $auctions
        ]);
    }
    public function postCuppingProduct(Request $request)
    {

        $request->validate([
            'selected_product' => 'required|array',
            'auction_id' => 'required'
        ]);

        $cuppingProducts =  OpenCuppingProduct::where('auction_id',  $request->auction_id)->first();
        if ($cuppingProducts) {
            $cuppingProducts->update([
                'products' => implode(',', $request->selected_product)
            ]);
        } else {
            $cuppingProducts = OpenCuppingProduct::create([
                'auction_id' => $request->auction_id,
                'products' => implode(',', $request->selected_product),
            ]);
        }
        return redirect()->to('/cupping/create/' . $cuppingProducts->id);
    }
    public function auctionProduct(Request $request)
    {
        $productArr = [];
        $table = [];
        $cuppingProducts =  OpenCupping::where('auction_id',  $request->auction_id)->get();
        foreach ($cuppingProducts as $cProduct) {
            array_push($productArr, $cProduct['product_id']);
            array_push($table,  $cProduct['table']);
        }

        $products = Product::orderBy('table', 'asc')->get();
        if ($request->cuppingScreen == 1) {
            return view('admin.jury.cupping_product_ajax', [
                'products' => $products,
                'cuppingProduct' => $productArr
            ]);
        } else {
            $auctionProduct = Product::whereIn('id',  @$productArr)->orderBy('table', 'asc')->get();
            return view('admin.jury.jury_cupping_product_ajax', [
                'products' => $auctionProduct,
                'table' => $table,
                'auction_id' => $request->auction_id
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'products' => 'required|array',
            'auction_id' => 'required'
        ]);

        foreach ($request->products as $key => $product) {

            $sampleSent = OpenCupping::where('product_id', $product)
                ->where('samples', $request->samples[$key])->first();
            // Product::where('id', $product)->update([
            //     'postion' =>  $request->postion[$key],
            //     'table'  =>    $request->$key,
            //     'sample'  => $request->samples[$key],
            // ]);

            if (isset($sampleSent)) {
                $sampleSent->table = $request->$key;
                $sampleSent->product_id = $product;
                $sampleSent->postion = $request->postion[$key];
                $sampleSent->auction_id = $request->auction_id;
                $sampleSent->user_id = '0';
                $sampleSent->samples = $request->samples[$key];
                $sampleSent->save();
            } else {
                $sampleSent = new OpenCupping();
                $sampleSent->table = $request->$key;
                $sampleSent->product_id = $product;
                $sampleSent->postion = $request->postion[$key];
                $sampleSent->auction_id = $request->auction_id;
                $sampleSent->user_id = '0';
                $sampleSent->samples = $request->samples[$key];
                $sampleSent->save();
            }
        }

        return redirect()->back()->with('success', 'Cupping Has Been Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OpenCupping  $openCupping
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $userId = $request->userId;
        $tables = 1;
        $samples = OpenCupping::join('products', 'products.id', 'open_cuppings.product_id')
            ->when($userId != 0, function ($q) use ($userId) {
                $q->join('open_cupping_users', 'open_cupping_users.id', 'open_cuppings.user_id')->where('open_cuppings.user_id', $userId);
            })
            ->when($userId == 0, function ($q) {
                $q->where('open_cuppings.user_id', '0');
            })
            ->select('products.*', 'open_cuppings.*')
            ->orderBy('open_cuppings.postion', 'asc')
            ->get();
        //   return response($samples);
        return view('admin.cupping_samples', compact('userId', 'samples', 'tables'))->render();
    }
    public function review2(Request $request)
    {
        $userId = $request->userId;
        $alltablesamples = OpenCupping::join('products', 'products.id', 'open_cuppings.product_id')
            ->when($userId != 0, function ($q) use ($userId) {
                $q->join('open_cupping_users', 'open_cupping_users.id', 'open_cuppings.user_id')
                    ->where('open_cuppings.user_id', $userId);
            })
            ->when($userId == 0, function ($q) {
                $q->where('open_cuppings.user_id', '0');
            })
            ->select(
                'products.id as productId',
                'products.product_title as productTitle',
                'open_cuppings.id as sampleId',
                'open_cuppings.samples as samples',
                'open_cuppings.table as sampleTable',
                'open_cuppings.postion as samplePostion',
                'open_cuppings.is_hidden'
            )
            ->where('open_cuppings.table', $request->table)
            ->orderBy('samplePostion', 'asc')
            // ->where('open_cuppings.is_hidden', '0')
            ->get();

        // dd($alltablesamples);


        if (isset($request->sampleId)) {
            $firstsample = OpenCupping::where('id', $request->sampleId)
                ->first();
            $review = OpenCuppingReview::where('sample_id', $request->sampleId)
                ->first();
        } else {
            $review = null;
            $firstsample = $alltablesamples->first();

            // if (!isset($firstsample)) {
            //     $firstsample = OpenCupping::where('open_cuppings.jury_id', $request->juryId)
            //         ->first();

            //     return redirect()->route('juryLinks', ['id' => encrypt($firstsample->jury_id)]);
            // }
        }
        // dd($review->overall);
        // $sampleReview1 = Review::where('sample_id', $firstsample->id)->first();

        // if (isset($sampleReview1)) {
        //     $sampleReview = $sampleReview1;
        // } else {
        //     $sampleReview = null;
        // }
        if ($firstsample) {

            // $productdata = Product::where('id', $firstsample->product_id)->first();
            $productdata = OpenCupping::join('products', 'products.id', 'open_cuppings.product_id')
                ->when($userId != 0, function ($q) use ($userId) {
                    $q->join('open_cupping_users', 'open_cupping_users.id', 'open_cuppings.user_id')
                        ->where('open_cuppings.user_id', $userId);
                })
                ->when($userId == 0, function ($q) {
                    $q->where('open_cuppings.user_id', '0');
                })
                ->select('open_cuppings.*')
                ->where('open_cuppings.product_id', $firstsample->product_id)
                ->where('open_cuppings.table', 1)
                ->first();
            // if ($firstsample->is_hidden == '1') {
            //     return view('admin.jury.alredy_submit');
            // } else
            // {
            $user = User::where('id', $userId)->first();
            $samplesArr = explode(',', $firstsample->samples);
            return view('admin.jury.form', [
                'productId' => $firstsample->product_id ?? $firstsample->productId,
                'table' => $request->table ?? $firstsample->sampleTable,
                'firstsample' => $firstsample,
                'reviewdata' => $review,
                'productdata' => $productdata,
                'alltablesamples' => $alltablesamples,
                'sampleName' => $firstsample->samples,
                'sentSampleId' => $firstsample->id,
                'samples' => $samplesArr,
                'sampleReview' => $review,
                'user' => $user
            ]);
            // }
        }
    }

    public function saveCuppingReview(Request $request)
    {

        $userId = $request->userId;
        $sampleSent = OpenCupping::when($userId != 0, function ($q) use ($userId) {
            $q->join('open_cupping_users', 'open_cupping_users.id', 'open_cuppings.user_id')
                ->where('open_cuppings.user_id', $userId)->select('open_cuppings.*');
        })
            ->when($userId == 0, function ($q) {
                $q->where('open_cuppings.user_id', '0');
            })
            ->where('open_cuppings.product_id', $request->product_id)
            ->where('open_cuppings.id', $request->sent_sample_id)
            // ->where('is_hidden', '0')
            ->first();


        if (isset($sampleSent)) {
            if ($sampleSent->is_hidden == '1') {
                $review = OpenCuppingReview::when($userId != 0, function ($q) use ($userId) {
                    $q->join('open_cupping_users', 'open_cupping_users.id', 'open_cupping_reviews.user_id')
                        ->where('open_cupping_reviews.user_id', $userId)->select('open_cupping_reviews.*');
                })
                    ->when($userId == 0, function ($q) {
                        $q->where('open_cuppings.user_id', '0');
                    })
                    ->where('open_cupping_reviews.product_id', $request->product_id)
                    ->where('open_cupping_reviews.sample_id', $sampleSent->id)
                    ->first();
            } else {
                $review = new OpenCuppingReview();
            }
            $review->aroma_dry              = $request->aroma_dry;
            $review->aroma              = $request->aroma;
            $review->aroma_crust            = $request->aroma_crust;
            $review->quality_notes            = $request->quality_notes;
            $review->roast                  = $request->roast;
            $review->first_number           = $request->first_number;
            $review->second_number          = $request->second_number;
            $review->aroma_break            = $request->aroma_break;
            $review->defect                 = (isset($request->defect)) ? $request->defect : 0;
            $review->cleancupvalue          = $request->cleancupvalue;
            $review->sweetnesvalue          = $request->sweetnesvalue;
            $review->uniformityvalue        = $request->uniformityvalue;
            $review->acidity                = $request->acidity;
            $review->body                   = $request->body;
            $review->acidity_chk            = $request->acidity_chk;
            $review->body_chk               = $request->body_chk;
            $review->flavour                = $request->flavour;
            $review->balance                = $request->balance;
            $review->note                   = $request->notes;
            $review->overall                = $request->overall;
            $review->total_score            = (isset($request->total_score)) ? $request->total_score : 0;
            $review->user_id                = $request->userId;
            $review->sample_id              = $request->sent_sample_id;
            $review->product_id             = $request->product_id;
            $review->manual             = $request->manual_override;
            $review->save();
            $sampleSent->is_hidden = '1';
            $sampleSent->save();
        }

        $sampleSent2 = OpenCupping::where('is_hidden', '0')->orderBy('postion', 'asc')->first();


        if (isset($request->table_submit)) {
            $alltablesamples = OpenCupping::when($userId != 0, function ($q) use ($userId) {
                $q->join('open_cupping_users', 'open_cupping_users.id', 'open_cuppings.user_id')
                    ->where('open_cuppings.user_id', $userId)->select('open_cuppings.*');
            })
                ->when($userId == 0, function ($q) {
                    $q->where('open_cuppings.user_id', '0');
                })->where('open_cuppings.table', $request->table_value)
                ->where('open_cuppings.is_hidden', '0')
                ->update(array("is_hidden" => "1"));
            return redirect()->route('show_cupping');
        }
        if (isset($request->sample_submit_prev)) {
            $v = ($request->current_position > 0) ? true : false;
            $sample2Sent = OpenCupping::when($v, function ($q) use ($request) {
                $q->where('postion', $request->current_position - 1)->where('table', $request->table_value);
            })->when($userId != 0, function ($q) use ($userId) {
                $q->join('open_cupping_users', 'open_cupping_users.id', 'open_cuppings.user_id')
                    ->where('open_cuppings.user_id', $userId)->select('open_cuppings.*');;
            })
                ->when($userId == 0, function ($q) {
                    $q->where('open_cuppings.user_id', '0');
                })
                ->first();
            //  dd($request);
            if ($sample2Sent) {
                $sampleSent = $sample2Sent;
            }
        }

        if (isset($request->sample_submit)) {


            $sample2Sent = OpenCupping::when($userId != 0, function ($q) use ($userId) {
                $q->join('open_cupping_users', 'open_cupping_users.id', 'open_cuppings.user_id')
                    ->where('open_cuppings.user_id', $userId)
                    ->select('open_cuppings.*');
            })
                ->when($userId == 0, function ($q) {
                    $q->where('open_cuppings.user_id', '0');
                })
                ->where('postion', $request->current_position + 1)
                ->first();

            if (isset($sample2Sent)) {
                $sampleSent = $sample2Sent;
            } else {
                $sampleSent = OpenCupping::when($userId != 0, function ($q) use ($userId) {
                    $q->join('open_cupping_users', 'open_cupping_users.id', 'open_cuppings.user_id')
                        ->where('open_cuppings.user_id', $userId)
                        ->select('open_cuppings.*');
                })
                    ->when($userId == 0, function ($q) {
                        $q->where('open_cuppings.user_id', '0');
                    })
                    ->where('postion', $request->current_position)
                    ->first();
            }
        }
        if ($request->to_go_sample) {
            return redirect()->route('give_cupping_review', ['userId' => $userId, 'table' => 1, 'sampleId' => $request->to_go_sample])->with('success', 'Review submitted successfully');
        } else {
            return redirect()->route('give_cupping_review', ['userId' => $userId, 'table' => 1, 'sampleId' => $sampleSent->id])->with('success', 'Review submitted successfully');
        }
    }
    public function openCuppingFeedback()
    {
        $samples = OpenCupping::groupBy('samples')
            ->select('samples', DB::raw('count(*) as total'))
            ->where('user_id', '!=', '0')
            ->get();

        if (count($samples) > 0) {
            foreach ($samples as $key => $value) {
                $count = OpenCupping::where(['samples' => $value->samples, 'is_hidden' => "1"])->count();
                $reviewed[$key] = $count;
            }
        } else {
            $reviewed = array();
        }

        $dateArr = array();
        foreach ($samples as $key => $value) {
            $sampleDate = OpenCupping::where('samples', $value->samples)
                ->where('user_id', '!=', '0')
                ->first();
            array_push($dateArr, $sampleDate->created_at);
        }
        $opencupping = true;
        return view('admin.reviewed_samples', compact('samples', 'reviewed', 'dateArr', 'opencupping'));
    }
    public function openCuppingReviewDetail($sample)
    {
        $data = array();
        $sampleSentToJuries = OpenCupping::where(['samples' => $sample])->where('user_id', '!=', '0')->get();
        foreach ($sampleSentToJuries as $key => $value) {
            $product = Product::where('id', $value["product_id"])->first();
            $review = OpenCuppingReview::where('sample_id', $value->id)->first();
            if (isset($review))
                $user = OpenCuppingUser::where('id', $value->user_id)->first();
            $data[$key]['name'] = $user->name ?? '--';
            $data[$key]['total'] =      $review->total_score ?? '0';
            $data[$key]['productName'] = $product->product_title;
            $data[$key]['sample'] = $value['samples'];
            $data[$key]['aroma_dry'] =   $review->aroma_dry ?? '0.0';
            $data[$key]['quality_notes'] =  $review->quality_notes ?? 'quality notes';
            $data[$key]['aroma_break'] =    $review->aroma_break ?? '0.0';
            $data[$key]['uniformityvalue'] =   $review->uniformityvalue ?? '0.0';
            $data[$key]['cleanupvalue'] =   $review->cleancupvalue ?? '0.0';
            $data[$key]['sweetnessvalue'] =  $review->sweetnesvalue ?? '0.0';
            $data[$key]['acidity'] =    isset($review->acidity) ? $review->acidity : '0.0' . '-' . (isset($review->acidity_chk) ? $review->acidity_chk : 'L') ?? '0.0-L';
            $data[$key]['flavour'] =    $review->flavour ?? '0.0';
            $data[$key]['after_taste'] =    $review->after_taste ?? '0.0';
            $data[$key]['balance'] =    $review->balance ?? '0.0';
            $data[$key]['body'] =    $review->body ?? '0.0';
            $data[$key]['overall'] =    $review->overall ?? '0.0';
            // $data[$key]['mouthfeel_note'] =   $review->mouthfeel_note ?? '----';
            $data[$key]['roast'] =    isset($review->roast) ? $review->roast . '%' : "0%";
            $data[$key]['defect'] =    isset($review->defect) ? '(' . $review->first_number . '*' . $review->second_number . ')=' . $review->defect : "(0*0)=0";
            $data[$key]['note'] =    $review->note ?? '---';
        }
        //  dd($data);
        return view('admin.open_cupping_reviewed_details', compact('data'));
    }
    public function openCuppingSummary()
    {
        $reviews = OpenCuppingReview::join('open_cupping_users', 'open_cupping_reviews.user_id', 'open_cupping_users.id')
            ->join('products', 'open_cupping_reviews.product_id', 'products.id')
            ->join('open_cuppings', 'open_cupping_reviews.sample_id', 'open_cuppings.id')
            ->select(
                'open_cuppings.samples as sampleId',
                'open_cupping_users.name as name',
                'products.product_title as product',
                'open_cupping_reviews.total_score as total'
            )
            ->where('open_cuppings.is_hidden', '1')
            ->where('open_cuppings.user_id', '!=', '0')
            ->get();

        return view('admin.reviewed_summary', compact('reviews'));
    }
}
