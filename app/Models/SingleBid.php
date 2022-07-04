<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleBid extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function auctionProduct()
    {
        return $this->belongsTo(AuctionProduct::class);
    }
}
