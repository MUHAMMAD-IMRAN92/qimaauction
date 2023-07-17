<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionProduct extends Model
{

    use HasFactory;
    protected $casts = [
        'rank' => 'integer',
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    public function latestBidPrice()
    {
        return $this->hasOne(SingleBid::class, 'auction_product_id', 'id')->orderBy('id', 'desc');
    }

    public function latestAutoBidPrice()
    {
        return $this->hasOne(AutoBid::class, 'auction_product_id', 'id')->where('is_active', '1');
    }

    public function singleBids()
    {
        return $this->hasMany(SingleBid::class, 'auction_product_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'product_id', 'product_id');
    }
    public function winningImages()
    {
        return $this->hasMany(WinningCofeeImages::class, 'user_id', 'id');
    }

    public function autoBids()
    {
        return $this->hasMany(AutoBid::class, 'auction_product_id', 'id');
    }

    public function autoBidActive()
    {
        return $this->hasOne(AutoBid::class, 'auction_product_id', 'id')->where('is_active', '1')->orderBy('created_at', 'desc');
    }

    public function latestBidPriceAmount()
    {
        return $this->hasOne(SingleBid::class, 'auction_product_id', 'id')->orderBy('id', 'desc');
    }
    public function productImages()
    {
        return $this->hasMany(AuctionProductImages::class, 'auction_product_id', 'id');
    }

    public function auction()
    {
        return $this->hasOne(Auction::class, 'id', 'auction_id');
    }

    public function auctionProductImages()
    {
        return $this->hasMany(AuctionProductImages::class, 'auction_product_id', 'id')->orderBy('order_no', 'asc');
    }
    protected $guarded = [''];
    public function villages()
    {
        return $this->hasOne(Village::class, 'title', 'village');
    }
    public function regions()
    {
        return $this->hasOne(Region::class, 'title', 'region');
    }
    public function governorates()
    {
        return $this->hasOne(Governorate::class, 'title', 'governorate');
    }
    public function genetics()
    {
        return $this->hasOne(Genetic::class, 'title', 'genetic');
    }
    public function processes()
    {
        return $this->hasOne(Process::class, 'title', 'process');
    }
}
