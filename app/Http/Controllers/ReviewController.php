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
        //  if(isset($request->table_submit))
        //  {
        //     //  dd($request->all());
        //             $alltablesamples = SentToJury::join('products','products.id','sample_sent_to_jury.product_id')
        //             ->join('juries','juries.id','sample_sent_to_jury.jury_id')
        //             ->select('products.id as productId','products.product_title as productTitle',
        //             'sample_sent_to_jury.id as sampleId','sample_sent_to_jury.jury_id as juryId',
        //             'sample_sent_to_jury.samples as samples','sample_sent_to_jury.tables as sampleTable',
        //             'juries.name as juryName','sample_sent_to_jury.is_hidden')
        //             ->where('sample_sent_to_jury.jury_id', $request->jury_id)
        //             ->where('sample_sent_to_jury.tables', $request->table_submit)
        //             ->where('sample_sent_to_jury.is_hidden', '0')
        //             ->get();
        //             // dd($alltablesamples);
        //             foreach ($alltablesamples as $key => $value) {
        //                     $sampleSent = SentToJury::where('jury_id',  $value->juryId)
        //                     ->where('product_id', $value->productId)
        //                     ->where('samples', $value->samples)
        //                     ->where('is_hidden','0')
        //                     ->first();
        //                     $sampleSent->is_hidden = '1';
        //                     $sampleSent->save();
        //                     if(isset($request->review_id))
        //                     {
        //                         $review = Review::where('id',$request->review_id)->first();
        //                     }
        //                     else
        //                     {
        //                         $review = new Review();
        //                     }
        //                     $review->aroma_dry              = $request->aroma_dry;
        //                     $review->aroma_crust            = $request->aroma_crust;
        //                     $review->roast                  = $request->roast;
        //                     $review->first_number            = $request->first_number;
        //                     $review->second_number          = $request->second_number;
        //                     $review->aroma_break            = $request->aroma_break;
        //                     $review->aroma_note             = $request->aroma_note;
        //                     $review->color_dev              = $request->color_dev;
        //                     $review->defect                 = (isset($request->defect)) ? $request->defect : 0;
        //                     $review->clean_up               = $request->clean_up;
        //                     $review->sweetness              = $request->sweetness;
        //                     $review->defects_note           = $request->defect_note;
        //                     $review->clean_sweet_note       = $request->cleanup_note;
        //                     $review->acidity                = $request->acidity;
        //                     $review->acidity_chk            = $request->acidity_chk;
        //                     $review->mouth_feel             = $request->mouth_feel;
        //                     $review->fm_chk                 = $request->fm_chk;
        //                     $review->flavour                = $request->flavour;
        //                     $review->flavor_note            = $request->flavor_note;
        //                     $review->after_taste            = $request->after_taste;
        //                     $review->balance                = $request->balance;
        //                     $review->sweetness_note          = $request->sweetness_note;  
        //                     $review->acidity_note            = $request->acidity_note;  
        //                     $review->mouthfeel_note          = $request->mouthfeel_note;   
        //                     $review->aftertaste_note         = $request->aftertaste_note;  
        //                     $review->balance_note            = $request->balance_note;  
        //                     $review->overall_note            = $request->overall_note;  
        //                     $review->overall                = $request->overall;
        //                     $review->total_score            = (isset($request->total_score)) ? $request->total_score : 0;
        //                     $review->jury_id                = $request->jury_id;
        //                     $review->sample_id              = $request->sent_sample_id;
        //                     $review->product_id             = $request->product_id;
        //                     $review->save();
        //                     if(isset($request->discriptor))
        //                     {
        //                             foreach ($request->discriptor as $tag) {
        //                                 $data = Tag::where('tag',$tag)->first();
        //                                 if(!isset($data))
        //                                 {
        //                                     $descriptor = new Tag();
        //                                     $descriptor->tag = $tag;
        //                                     $descriptor->review_id = $review->id;
        //                                     $descriptor->jury_id = $review->jury_id;
        //                                     $descriptor->save();
        //                                 }
        //                             }
        //                     }          
        //             }
        //    return redirect()->route('juryLinks',['id'=>encrypt($request->jury_id)]);
        //  }
        //  if(isset($request->sample_submit))
          {
                        $sampleSent = SentToJury::where('jury_id',  $request->jury_id)
                                                ->where('product_id', $request->product_id)
                                                //  ->where('temporary_link',$request->link)
                                                ->where('id',$request->sent_sample_id)
                                                //  ->where('is_hidden','0')
                                                ->first();
                                                //  return  $sampleSent;
                        if ($sampleSent->is_hidden == '1') {
                            $review = Review::where('sample_id',$sampleSent->id)->first();            
                            //return view('admin.jury.alredy_submit');
                            if(!$review){
                                $review = new Review();
                            }
                        }
                        else
                        {
                            if(isset($request->review_id))
                            {
                                $review = Review::where('id',$request->review_id)->first();
                                if(!$review){
                                    $review = new Review();
                                }
                            }
                            else
                            {
                                $review = new Review();
                            }
                           
                            $sampleSent->is_hidden = '1';
                            $sampleSent->save();
                        }
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
                        $review->defects_note           = $request->defect_note;
                        $review->clean_sweet_note       = $request->cleanup_note;
                        $review->acidity                = $request->acidity;
                        $review->acidity_chk            = $request->acidity_chk;
                        $review->mouth_feel             = $request->mouth_feel;
                        $review->fm_chk                 = $request->fm_chk;
                        $review->flavour                = $request->flavour;
                        $review->flavor_note            = $request->flavor_note;
                        $review->after_taste            = $request->after_taste;
                        $review->balance                = $request->balance;
                        $review->sweetness_note          = $request->sweetness_note;  
                        $review->acidity_note            = $request->acidity_note;  
                        $review->mouthfeel_note          = $request->mouthfeel_note;   
                        $review->aftertaste_note         = $request->aftertaste_note;  
                        $review->balance_note            = $request->balance_note;  
                        $review->overall_note            = $request->overall_note;  
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
                        $sampleSent2 = SentToJury::where('jury_id',  $request->jury_id)
                                                //  ->where('temporary_link',$request->link)
                                                ->where('is_hidden','0')
                                                ->orderBy('tables','asc')
                                                ->orderBy('postion','asc')

                                                ->first();
       
        }
        if(isset($request->table_submit)){
            $alltablesamples = SentToJury::
                        where('sample_sent_to_jury.jury_id', $request->jury_id)
                        ->where('sample_sent_to_jury.tables', $request->table_value)
                        ->where('sample_sent_to_jury.is_hidden', '0')
                        ->update(array("is_hidden" => "1"));
        }
        if(isset($request->sample_submit_prev)){
            $sample2Sent = SentToJury::
                        where('sample_sent_to_jury.jury_id', $request->jury_id)
                        ->where('sample_sent_to_jury.tables', $request->table_value)
                        ->where('postion',$request->current_position-1);
                        //  ->first();
                         dd($sample2Sent->toSql());
                        if($sample2Sent){
                            $sampleSent = $sample2Sent;
                        }
        }
        if(isset($request->sample_submit)){
            $sample2Sent = SentToJury::
                        where('sample_sent_to_jury.jury_id', $request->jury_id)
                        ->where('sample_sent_to_jury.tables', $request->table_value)
                        ->where('postion',$request->current_position+1)
                        ->first();
                        if($sample2Sent){
                            $sampleSent = $sample2Sent;
                        }
        }
        if($request->to_go_sample){
            return redirect()->route('give_review',['juryId'=>$sampleSent->jury_id,'table'=>$sampleSent->tables,'sampleId'=>$request->to_go_sample])->with('success','Review submitted Succesully');

        }else{                 
            return redirect()->route('give_review',['juryId'=>$sampleSent->jury_id,'table'=>$sampleSent->tables,'sampleId'=>$sampleSent->id])->with('success','Review submitted Succesully');
        }
    }
    public function form()
    {
        return view('admin.jury.form');
    }
    public function reviewTableData(Request $request)
    {
        $tables =$request->table;
        $samples = SentToJury::join('products','products.id','sample_sent_to_jury.product_id')
                                ->join('juries','juries.id','sample_sent_to_jury.jury_id')
                                  ->select('products.*','sample_sent_to_jury.*','juries.name')
                                  ->where('sample_sent_to_jury.jury_id', $request->juryId)
                                  ->where('sample_sent_to_jury.tables', $request->table)
                                //   ->where('sample_sent_to_jury.is_hidden', '0')
                                  ->get();
                                //   return response($samples);
         $data= view('admin.sample_table',compact('samples','tables'))->render();
         return response()->json(array('success' => true, 'html'=>$data));

    }
    public function reviewedSamples()
    {
        $samples= SentToJury::groupBy('samples')
                        ->select('samples', DB::raw('count(*) as total'))
                        // ->where('sample_sent_to_jury.is_hidden','=','0')
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
                    ->select('sample_sent_to_jury.samples as sampleId','sample_sent_to_jury.jury_id as jury_id',
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
            // $data[$key]['aroma_note'] =    $review->aroma_note ?? '---';
            $data[$key]['clean_up'] =   $review->clean_up ?? '0.0';
            $data[$key]['clean_sweet_note'] =   $review->clean_sweet_note ?? '----';
            $data[$key]['sweetness'] =  $review->sweetness ?? '0.0';
            $data[$key]['sweetness_note'] =   $review->sweetness_note ?? '----';
            $data[$key]['acidity'] =    isset($review->acidity) ? $review->acidity : '0.0'.'-'.(isset($review->acidity_chk) ? $review->acidity_chk : 'L') ?? '0.0-L';
            $data[$key]['acidity_note'] =   $review->acidity_note ?? '----';
            $data[$key]['flavour'] =    $review->flavour ?? '0.0';
            $data[$key]['flavour_note'] =    $review->flavour_note ?? '---';
            $data[$key]['after_taste']= isset($review->after_taste) ? $review->after_taste : '0.0'.'-'.(isset($review->fm_chk) ? $review->fm_chk : 'L') ?? '0.0-L';
            $data[$key]['aftertaste_note'] =   $review->aftertaste_note ?? '----';
            $data[$key]['balance'] =    $review->balance ?? '0.0';
            $data[$key]['balance_note'] =   $review->balance_note ?? '----';
            $data[$key]['overall'] =    $review->overall ?? '0.0';
            $data[$key]['overall_note'] =   $review->overall_note ?? '----';
            // $data[$key]['mouthfeel_note'] =   $review->mouthfeel_note ?? '----';
            $data[$key]['roast'] =    isset($review->roast) ? $review->roast.'%' : "0%";
            $data[$key]['defect'] =    isset($review->defect) ? '('.$review->first_number.'*'.$review->second_number.'*4)='.$review->defect : "(0*0*4)=0";
            $data[$key]['defect_note'] =    $review->defect_note ?? '---';
        }
       return view('admin.reviewed_details',compact('data'));
    }
}
