<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WinningCofeeImages extends Model
{
    use HasFactory;
    public function winningCofees()
    {
        return $this->belongsTo(WinningCofees::class);
    }
    public function auctionProductImages()
    {
        return $this->belongsTo(AuctionProduct::class);
    }
}
