<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentTrackingStatus extends Model
{
    use HasFactory;

    public function auctionWinners()
    {
        return $this->belongsTo(AuctionWinners::class);
    }
}
