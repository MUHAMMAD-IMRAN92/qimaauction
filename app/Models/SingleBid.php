<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleBid extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['user'];
    public function user()
    {
        return $this->hasMany(User::class,'id','user_id');
    }
    public function auctionProducts()
    {
        return $this->belongsTo(AuctionProduct::class);
    }
}
