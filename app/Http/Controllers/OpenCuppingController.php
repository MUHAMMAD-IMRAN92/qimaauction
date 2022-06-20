<?php

namespace App\Http\Controllers;

use App\Models\OpenCupping;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Auction;
use App\Models\Review;
use App\Models\OpenCuppingReview;
use App\Models\OpenCuppingUser;
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
        $user = OpenCuppingUser::create([
            'name' => isset($request->name) ? $request->name : $faker->name,
            'email' => isset($request->email) ? $request->email : $faker->unique()->email,
        ]);
        return redirect()->route('show_cupping', $user->id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $auctions = Auction::all();
        return view('admin.jury.open_cupping', [
            'products' => $products,
            'auctions' => $auctions
        ]);
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
                $sampleSent->samples = $request->samples[$key];
                $sampleSent->save();
            } else {
                $sampleSent = new OpenCupping();
                $sampleSent->table = $request->$key;
                $sampleSent->product_id = $product;
                $sampleSent->postion = $request->postion[$key];
                $sampleSent->auction_id = $request->auction_id;
                $sampleSent->samples = $request->samples[$key];
                $sampleSent->save();
            }
        }

        return redirect('/cupping/show');
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
            ->select('products.*', 'open_cuppings.*')
            ->get();

        //   return response($samples);
        return view('admin.cupping_samples', compact('userId', 'samples', 'tables'))->render();
    }
    public function review2(Request $request)
    {
        $alltablesamples = OpenCupping::join('products', 'products.id', 'open_cuppings.product_id')
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
            $firstsample = OpenCupping::where('open_cuppings.id', $request->sampleId)
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
                ->select('open_cuppings.*')
                ->where('open_cuppings.product_id', $firstsample->product_id)
                ->where('open_cuppings.table', 1)
                ->first();
            // if ($firstsample->is_hidden == '1') {
            //     return view('admin.jury.alredy_submit');
            // } else 
            // {
            
            $samplesArr = explode(',', $firstsample->samples);
            return view('admin.jury.form', [
                'productId' => $firstsample->product_id ?? $firstsample->productId,
                'table' => $request->table ?? $firstsample->sampleTable,
                'firstsample' => $firstsample,
                'reviewdata' => $review,
                'productdata' => $productdata,
                'alltablesamples' => $alltablesamples,
                'userId' => $request->userId,
                'sampleName' => $firstsample->samples,
                'sentSampleId' => $firstsample->id,
                'samples' => $samplesArr,
                'sampleReview' => $review
            ]);
            // }
        }
    }

    public function saveCuppingReview(Request $request)
    {
        $sampleSent = OpenCupping::where('product_id', $request->product_id)
            ->where('id', $request->sent_sample_id)
            // ->where('is_hidden', '0')
            ->first();

        if (isset($sampleSent)) {
            if ($sampleSent->is_hidden == '1') {
                $review = OpenCuppingReview::where('sample_id', $sampleSent->id)->first();
            } else {
                $review = new OpenCuppingReview();
                $sampleSent->is_hidden = '1';
                $sampleSent->save();
            }
            $review->aroma_dry              = $request->aroma_dry;
            $review->aroma_crust            = $request->aroma_crust;
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
        }

        $sampleSent2 = OpenCupping::where('is_hidden', '0')->orderBy('postion', 'asc')->first();


        if (isset($request->table_submit)) {
            $alltablesamples = OpenCupping::where('open_cuppings.table', $request->table_value)
                ->where('open_cuppings.is_hidden', '0')
                ->update(array("is_hidden" => "1"));
            return redirect()->route('show_cupping');
        }
        if (isset($request->sample_submit_prev)) {
            $v = ($request->current_position > 0) ? true : false;
            $sample2Sent = OpenCupping::when($v, function ($q) use ($request) {
                $q->where('postion', $request->current_position - 1)->where('table', $request->table_value);
            })->first();
            //  dd($request);
            if ($sample2Sent) {
                $sampleSent = $sample2Sent;
            }
        }

        if (isset($request->sample_submit)) {
            $v = ($request->current_position > 0) ? true : false;
            $sample2Sent = OpenCupping::when($v, function ($q) use ($request) {
                $q->where('postion', $request->current_position + 1)->where('table', $request->table_value);
            })->first();
            if (isset($sample2Sent)) {
                $sampleSent = $sample2Sent;
            } else {
                $sample2Sent = OpenCupping::when($v, function ($q) use ($request) {
                    $q->where('postion', $request->current_position);
                    // ->where('table', $request->table_value);
                })->first();
                $sampleSent = $sample2Sent;
            }
        }
        if ($request->to_go_sample) {
            return redirect()->route('give_cupping_review', ['table' => 1, 'sampleId' => $request->to_go_sample])->with('success', 'Review submitted successfully');
        } else {
            return redirect()->route('give_cupping_review', ['table' => 1, 'sampleId' => $sampleSent->id])->with('success', 'Review submitted successfully');
        }
    }
    public function openCuppingFeedback()
    {
        $samples = OpenCupping::groupBy('samples')
            ->select('samples', DB::raw('count(*) as total'))
            // ->where('open_cuppings.is_hidden','=','0')
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
            $sampleDate = OpenCupping::where('samples', $value->samples)->first();
            array_push($dateArr, $sampleDate->created_at);
        }
        $opencupping = true;
        return view('admin.reviewed_samples', compact('samples', 'reviewed', 'dateArr', 'opencupping'));
    }
    public function openCuppingReviewDetail($sample)
    {
        $data = array();
        $sampleSentToJuries = OpenCupping::where(['samples' => $sample])->get();
        foreach ($sampleSentToJuries as $key => $value) {
            $product = Product::where('id', $value["product_id"])->first();
            $review = OpenCuppingReview::where('sample_id', $value->id)->first();
            $user = OpenCuppingUser::where('id', $review->user_id)->first();
            $data[$key]['name'] = $user->name ?? '--';
            $data[$key]['total'] =      $review->total_score ?? '0';
            $data[$key]['productName'] = $product->product_title;
            $data[$key]['sample'] = $value['samples'];
            $data[$key]['aroma_dry'] =   $review->aroma_dry ?? '0.0';
            $data[$key]['aroma_crust'] =  $review->aroma_crust ?? '0.0';
            $data[$key]['aroma_break'] =    $review->aroma_break ?? '0.0';
            // $data[$key]['aroma_note'] =    $review->aroma_note ?? '---';
            $data[$key]['uniformityvalue'] =   $review->uniformityvalue ?? '0.0';
            $data[$key]['cleanupvalue'] =   $review->cleancupvalue ?? '0.0';
            $data[$key]['sweetnessvalue'] =  $review->sweetnesvalue ?? '0.0';
            $data[$key]['acidity'] =    isset($review->acidity) ? $review->acidity : '0.0' . '-' . (isset($review->acidity_chk) ? $review->acidity_chk : 'L') ?? '0.0-L';
            $data[$key]['flavour'] =    $review->flavour ?? '0.0';
            $data[$key]['balance'] =    $review->balance ?? '0.0';
            $data[$key]['body'] =    $review->body ?? '0.0';
            $data[$key]['overall'] =    $review->overall ?? '0.0';
            // $data[$key]['mouthfeel_note'] =   $review->mouthfeel_note ?? '----';
            $data[$key]['roast'] =    isset($review->roast) ? $review->roast . '%' : "0%";
            $data[$key]['defect'] =    isset($review->defect) ? '(' . $review->first_number . '*' . $review->second_number . '*4)=' . $review->defect : "(0*0*4)=0";
            $data[$key]['note'] =    $review->note ?? '---';
        }
        //  dd($data);
        return view('admin.open_cupping_reviewed_details', compact('data'));
    }
    public function openCuppingSummary(){
        $reviews = OpenCuppingReview::join('open_cupping_users','open_cupping_reviews.user_id','open_cupping_users.id')
        ->join('products','open_cupping_reviews.product_id','products.id')
        ->join('open_cuppings','open_cupping_reviews.sample_id','open_cuppings.id')
        ->select('open_cuppings.samples as sampleId','open_cupping_users.name as name'
                 ,'products.product_title as product','open_cupping_reviews.total_score as total')
         ->where('open_cuppings.is_hidden','1')
        ->get();

  return view('admin.reviewed_summary',compact('reviews'));
    }
}
