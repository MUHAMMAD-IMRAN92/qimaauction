<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoBid extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function latestuser()
    {
        return $this->hasOne(User::class,'id','user_id')->latestOfMany();
    }
    public function auctionProducts()
   {
       return $this->belongsTo(AuctionProduct::class);
   }
}
