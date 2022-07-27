<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionProduct extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Product::class,'id','product_id');
    }
    public function latestBidPrice()
    {
        return $this->hasOne(SingleBid::class,'auction_product_id','id')->latestOfMany();
    }
    public function latestAutoBidPrice()
    {
        return $this->hasOne(AutoBid::class,'auction_product_id','id')->where('is_active','1')->latestOfMany();
    }
    public function singleBids()
    {
        return $this->hasMany(SingleBid::class,'auction_product_id','id');
    }
    public function winningImages()
    {
        return $this->hasMany(WinningCofeeImages::class,'user_id','id');
    }
    protected $guarded = [''];

}
