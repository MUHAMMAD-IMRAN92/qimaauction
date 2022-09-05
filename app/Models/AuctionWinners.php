<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionWinners extends Model
{
    use HasFactory;

    public function shipmentStatus()
    {
        return $this->hasMany(ShipmentTrackingStatus::class, 'auction_winner_id', 'id');
    }
}
