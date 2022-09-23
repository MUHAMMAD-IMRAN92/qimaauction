<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Offers extends Model
{
    use HasFactory;
    public function useroffers()
    {
        return $this->hasMany(UserOffers::class,'offer_id','id')->where('user_id',Auth::user()->id);
    }
    public function allOfferUsers()
    {
        return $this->hasMany(UserOffers::class,'offer_id','id');
    }
    public function auctionProducts()
    {
        return $this->hasOne(AuctionProduct::class,'id','auction_product_id');
    }
}
