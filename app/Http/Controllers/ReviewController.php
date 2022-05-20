<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\SentToJury;
use App\Models\Tag;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function saveReview(Request $request)
    {
        // return  $request->discriptor[0];
        // $validated = $request->validate([
        //     'cupping_score' => 'required|numeric',
        //     'cupping_profile' => 'required',
        //     'price_per_kg' => 'required|numeric',
        // ]);
        // $sampleSent = SentToJury::where('jury_id',  $request->jury_id)->where('product_id', $request->product_id)->where('temporary_link', $request->link)->first();
        // dd($sampleSent);
        // if ($sampleSent->is_hidden == '1') {
        //     return view('admin.jury.alredy_submit');
        // }
        // if ($sampleSent) {
        //     $sampleSent->is_hidden = '1';
        //     $sampleSent->save();
        // }
        $review = new Review();
        $review->aroma_dry              = $request->aroma_dry;
        $review->aroma_crust            = $request->aroma_crust;
        $review->aroma_break            = $request->aroma_break;
        $review->aroma_note             = $request->aroma_note;
        $review->color_dev              = $request->color_dev;
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
        $review->total_score            = $request->total_score;
        $review->jury_id                = $request->jury_id;
        $review->discriptor             = $request->discriptor[0];
        $review->product_id             = $request->product_id;
        $review->save();

        // foreach ($request->tags as $tag) {
        //     $descriptor = new Tag();
        //     $descriptor->tag = $tag;
        //     $descriptor->review_id = $review->id;
        //     $descriptor->save();
        // }


        return view('admin.jury.success');
    }
    public function form()
    {
    
        return view('admin.jury.form');
    }
}
