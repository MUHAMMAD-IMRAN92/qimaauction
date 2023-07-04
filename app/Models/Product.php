<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function origin()
    {
        return $this->hasOne(Origin::class, 'id', 'origin_id');
    }

    public function village()
    {
        return $this->hasOne(Village::class, 'id', 'village_id');
    }

    public function reviews()
    {
        return $this->hasOne(Review::class, 'product_id', 'id');
    }

    public function region()
    {
        return $this->hasOne(Region::class, 'id', 'region_id');
    }

    public function governorate()
    {
        return $this->hasOne(Governorate::class, 'id', 'governorate_id');
    }

    public function flavor()
    {
        return $this->hasOne(Flavour::class, 'id', 'flavour_id');
    }
    public function genetic()
    {
        return $this->hasOne(Genetic::class, 'id', 'genetic_id');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'product_id', 'id');
    }

    public function auctionProducts()
    {
        return $this->belongsTo(AuctionProduct::class);
    }

    function getSingleBid()
    {
        return $this->hasMany(SingleBid::class, 'auction_product_id');
    }

    public function tableUserForCupping($auctionId)
    {
        return OpenCupping::where('auction_id',  $auctionId)->where('product_id', $this->id)->first();
    }
    public function productAuctions()
    {
        return $this->hasMany(AuctionProduct::class, 'product_id', 'id');
    }
}
