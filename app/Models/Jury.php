<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Jury extends Model
{
    use HasFactory;

    // public function getIdAttribute($value)
    // {
    //     return Crypt::encryptString($value);
    // }

    protected $appends = ['recent_auction'];

    public function samples()
    {
        return $this->belongsToMany(SentToJury::class);
    }

    function getRecentAuctionAttribute()
    {
        $sentToJury =   SentToJury::where('jury_id', $this->id)->orderBy('id', 'desc')->first();

        return  @$sentToJury->auction_id;
    }
    public function auctionSamples()
    {
        return $this->hasMany(SentToJury::class , 'jury_id' , 'id');
    }

}
