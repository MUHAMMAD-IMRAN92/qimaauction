<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\SentToJury;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function saveReview(Request $request)
    {
        $validated = $request->validate([
            'cupping_score' => 'required|numeric',
            'cupping_profile' => 'required',
            'price_per_kg' => 'required|numeric',
        ]);
        $sampleSent = SentToJury::where('jury_id',  $request->JId)->where('product_id', $request->pId)->where('temporary_link', $request->link)->first();
        if ($sampleSent->is_hidden == '1') {
            return view('admin.jury.alredy_submit');
        }
        if ($sampleSent) {
            $sampleSent->is_hidden = '1';
            $sampleSent->save();
        }
        $review = new Review();
        $review->cupping_score = $request->cupping_score;
        $review->cupping_profile = $request->cupping_profile;
        $review->description = $request->description;
        $review->jury_id = $request->JId;
        $review->product_id = $request->pId;
        $review->save();

        return view('admin.jury.success');
    }
}
