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
        return  $request->all();
        // $validated = $request->validate([
        //     'cupping_score' => 'required|numeric',
        //     'cupping_profile' => 'required',
        //     'price_per_kg' => 'required|numeric',
        // ]);
        $sampleSent = SentToJury::where('jury_id',  $request->JId)->where('product_id', $request->pId)->where('temporary_link', $request->link)->first();
        // return $sampleSent;
        if ($sampleSent->is_hidden == '1') {
            return view('admin.jury.alredy_submit');
        }
        if ($sampleSent) {
            $sampleSent->is_hidden = '1';
            $sampleSent->save();
        }
        // $review = new Review();
        // $review->aroma = $request->aroma;
        // $review->acidity = $request->acidity;
        // $review->intensity = $request->intensity;
        // $review->dry = $request->dry;
        // $review->break = $request->break;
        // $review->flavour = $request->flavour;
        // $review->body = $request->body;
        // $review->afterstate = $request->afterstate;
        // $review->balance = $request->balance;
        // $review->uniformity = $request->uniformityvalue;
        // $review->clean_cup = $request->cleancupvalue;
        // $review->sweetness = $request->sweetnessvalue;
        // $review->defect = $request->defectvalue;
        // $review->overall = $request->overall;
        // $review->roast = $request->roastvalue;
        // $review->message = $request->message;
        // $review->final_score = $request->totalvalue;
        // $review->jury_id = $request->JId;
        // $review->product_id = $request->pId;
        // $review->save();

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
