<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenCupping extends Model
{
    use HasFactory;
    protected $fillable = [''];

    public function auctionProduct()
    {
        return $this->hasOne(AuctionProduct::class, 'code', 'samples');
    }
    public function CodeAuctionProduct()
    {
        return $this->hasOne(AuctionProduct::class, 'product_id', 'productId');
    }
}
