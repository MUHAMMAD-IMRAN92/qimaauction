<?php

namespace App\Http\Controllers;

use App\Models\Jury;
use App\Models\Review;
use App\Models\SentToJury;
use App\Models\Tag;
use Illuminate\Http\Request;
use DB;
class ReviewController extends Controller
{
    public function saveReview(Request $request)
    {
       
        // return  $request->all();
        // $validated = $request->validate([
        //     'cupping_score' => 'required|numeric',
        //     'cupping_profile' => 'required',
        //     'price_per_kg' => 'required|numeric',
        // ]);
        // dd($request->jury_id, $request->product_id);
        $sampleSent = SentToJury::where('jury_id',  $request->jury_id)->where('product_id', $request->product_id)->where('temporary_link',$request->link)->first();
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
        return view('admin.jury.success');
    }
    public function form()
    {
        return view('admin.jury.form');
    }
    public function reviewedSamples()
    {
        $samples = DB::table('sample_sent_to_jury')
        ->select('samples', DB::raw('count(*) as total'))
        ->groupBy('samples')
        ->get();
     $dateArr = array();
        foreach ($samples as $key => $value) {
            $sampleDate = SentToJury::where('samples',$value->samples)->first();
           array_push($dateArr,$sampleDate->created_at);
        }
       
        return view('admin.reviewed_samples',compact('samples','dateArr'));
    }
    public function reviewDetail($sample)
    {
       $data =array();
       $juries = SentToJury::where('samples',$sample)->pluck('jury_id');
       foreach ($juries as $key => $value) {
             $jury=Jury::where('id',$value)->first();
             $review=Review::where('jury_id',$value)->first();
             $data[$key]['name'] = $jury->name;
             $data[$key]['aroma_dry'] =   $review->aroma_dry ?? '0.0';
             $data[$key]['aroma_crust'] =  $review->aroma_crust ?? '0.0';
             $data[$key]['aroma_break'] =    $review->aroma_break ?? '0.0';
             $data[$key]['clean_up'] =   $review->clean_up ?? '0.0';
             $data[$key]['sweetness'] =  $review->sweetness ?? '0.0';
             $data[$key]['acidity'] =    $review->acidity ?? '0.0';
             $data[$key]['flavour'] =    $review->flavour ?? '0.0';
             $data[$key]['after_taste']= $review->after_taste ?? '0.0';
             $data[$key]['balance'] =    $review->balance ?? '0.0';
             $data[$key]['overall'] =    $review->overall ?? '0.0';
             $data[$key]['roast'] =    isset($review->roast) ? $review->roast.'%' : "0%";
             $data[$key]['defect'] =    isset($review->defect) ? -$review->defect : "0.0";
             $data[$key]['total'] =      $review->total_score ?? '0.0';
       }
    //    foreach ($data as $key => $value) {
    //          foreach ($value as $key => $value1) {
    //              dd($key);
    //          }
    //    }
    //    dd($data);
       return view('admin.reviewed_details',compact('data'));
    }
}
