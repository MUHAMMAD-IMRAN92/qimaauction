<?php

namespace App\Http\Controllers;

use App\Models\Jury;
use App\Models\Review;
use App\Models\SentToJury;
use App\Models\Tag;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
class ReviewController extends Controller
{
    public function saveReview(Request $request)
    {
        // return  $request->all();
        $sampleSent = SentToJury::where('jury_id',  $request->jury_id)
                                 ->where('product_id', $request->product_id)
                                 ->where('temporary_link',$request->link)
                                 ->where('is_hidden','0')
                                 ->first();

        if ($sampleSent->is_hidden == '1') {
            return view('admin.jury.alredy_submit');
        }
        else
        {
            $sampleSent->is_hidden = '1';
            $sampleSent->save();
        }
        $review = new Review();
        $review->aroma_dry              = $request->aroma_dry;
        $review->aroma_crust            = $request->aroma_crust;
        $review->roast                  = $request->roast;
        $review->first_number            = $request->first_number;
        $review->second_number          = $request->second_number;
        $review->aroma_break            = $request->aroma_break;
        $review->aroma_note             = $request->aroma_note;
        $review->color_dev              = $request->color_dev;
        $review->defect                 = (isset($request->defect)) ? $request->defect : 0;
        $review->clean_up               = $request->clean_up;
        $review->sweetness              = $request->sweetness;
        $review->defects_note           = $request->defects_note;
        $review->clean_sweet_note       = $request->clean_sweet_note;
        $review->acidity                = $request->acidity;
        $review->acidity_chk            = $request->acidity_chk;
        $review->mouth_feel             = $request->mouth_feel;
        $review->fm_chk                 = $request->fm_chk;
        $review->flavour                = $request->flavour;
        $review->flavor_note            = $request->flavor_note;
        $review->after_taste            = $request->after_taste;
        $review->balance                = $request->balance;
        $review->overall                = $request->overall;
        $review->total_score            = (isset($request->total_score)) ? $request->total_score : 0;
        $review->jury_id                = $request->jury_id;
        $review->sample_id              = $request->sent_sample_id;
        $review->product_id             = $request->product_id;
        $review->save();
        if(isset($request->discriptor))
        {
                foreach ($request->discriptor as $tag) {
                    $data = Tag::where('tag',$tag)->first();
                    if(!isset($data))
                    {
                        $descriptor = new Tag();
                        $descriptor->tag = $tag;
                        $descriptor->review_id = $review->id;
                        $descriptor->jury_id = $review->jury_id;
                        $descriptor->save();
                    }
                }
        }
        
        return redirect()->route('give_review',['juryId'=>$sampleSent->jury_id,'table'=>$sampleSent->tables])->with('success','Review submitted Succesully');
        // return view('admin.jury.success');
    }
    public function form()
    {
        return view('admin.jury.form');
    }
    public function reviewTableData(Request $request)
    {
        $samples = SentToJury::join('products','products.id','sample_sent_to_jury.product_id')
                                ->join('juries','juries.id','sample_sent_to_jury.jury_id')
                                  ->select('products.*','sample_sent_to_jury.*','juries.name')
                                  ->where('sample_sent_to_jury.jury_id', $request->juryId)
                                  ->where('sample_sent_to_jury.tables', $request->table)
                                  ->where('sample_sent_to_jury.is_hidden', '0')
                                  ->get();
                                //   return response($samples);
         $data= view('admin.sample_table',compact('samples'))->render();
         return response()->json(array('success' => true, 'html'=>$data));

    }
    public function reviewedSamples()
    {
        $samples= SentToJury::groupBy('samples')
                        ->select('samples', DB::raw('count(*) as total'))
                        ->where('sample_sent_to_jury.is_hidden','=','0')
                         ->get();

        if(count($samples) > 0){
        foreach($samples as $key => $value) {
            $count = SentToJury::where(['samples'=>$value->samples,'is_hidden'=>"1"])->count();
            $reviewed[$key] = $count;} 
        }
        else{
            $reviewed = array();
        }

        $dateArr = array();
        foreach ($samples as $key => $value) {
            $sampleDate = SentToJury::where('samples',$value->samples)->first();
            array_push($dateArr,$sampleDate->created_at);
        }
        return view('admin.reviewed_samples',compact('samples','reviewed','dateArr'));
    }
    public function reviewSummary()
    {
        $reviews = Review::join('juries','reviews.jury_id','juries.id')
                    ->join('products','reviews.product_id','products.id')
                    ->join('sample_sent_to_jury','reviews.sample_id','sample_sent_to_jury.id')
                    ->select('sample_sent_to_jury.samples as sampleId',
                             'juries.name as name','products.product_title as product',
                              'reviews.total_score as total')
                    ->where('sample_sent_to_jury.is_hidden','1')
                    ->get();

              return view('admin.reviewed_summary',compact('reviews'));
    }
    public function reviewDetail($sample)
    {
       $data =array();
       $sampleSentToJuries = SentToJury::where(['samples'=>$sample])->get();
        foreach ($sampleSentToJuries as $key => $value) {
            $jury=Jury::where('id',$value['jury_id'])->first();
            $product=Product::where('id',$value["product_id"])->first();
            $review=Review::where('sample_id',$value->id)->first();
            $data[$key]['name'] = $jury->name ?? '--';
            $data[$key]['total'] =      $review->total_score ?? '0';
            $data[$key]['productName'] = $product->product_title;
            $data[$key]['sample'] = $value['samples'];
            $data[$key]['aroma_dry'] =   $review->aroma_dry ?? '0.0';
            $data[$key]['aroma_crust'] =  $review->aroma_crust ?? '0.0';
            $data[$key]['aroma_break'] =    $review->aroma_break ?? '0.0';
            $data[$key]['aroma_note'] =    $review->aroma_note ?? '---';
            $data[$key]['clean_up'] =   $review->clean_up ?? '0.0';
            $data[$key]['clean_sweet_note'] =   $review->clean_sweet_note ?? '----';
            $data[$key]['sweetness'] =  $review->sweetness ?? '0.0';
            $data[$key]['acidity'] =    isset($review->acidity) ? $review->acidity : '0.0'.'-'.(isset($review->acidity_chk) ? $review->acidity_chk : 'L') ?? '0.0-L';
            $data[$key]['flavour'] =    $review->flavour ?? '0.0';
            $data[$key]['flavour_note'] =    $review->flavour_note ?? '---';
            $data[$key]['after_taste']= isset($review->after_taste) ? $review->after_taste : '0.0'.'-'.(isset($review->fm_chk) ? $review->fm_chk : 'L') ?? '0.0-L';
            $data[$key]['balance'] =    $review->balance ?? '0.0';
            $data[$key]['overall'] =    $review->overall ?? '0.0';
            $data[$key]['roast'] =    isset($review->roast) ? $review->roast.'%' : "0%";
            $data[$key]['defect'] =    isset($review->defect) ? '('.$review->first_number.'*'.$review->second_number.'*4)='.$review->defect : "(0*0*4)=0";
            $data[$key]['defect_note'] =    $review->defect_note ?? '---';
        }
       return view('admin.reviewed_details',compact('data'));
    }
}
