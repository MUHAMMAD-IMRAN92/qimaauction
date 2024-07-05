<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    function bid()
    {
        return $this->hasMany(SingleBid::class, 'user_id');
    }
    function products()
    {
        return $this->hasManyThrough(Product::class, SingleBid::class, 'user_id', 'id', 'id', 'auction_product_id')->select('products.id', 'product_title', 'single_bids.bid_amount')->orderBy('id', 'asc')->orderBy('bid_amount', 'desc');
    }
    function higestBid()
    {
        // return $this->
    }
    function autoBid()
    {
        return $this->hasMany(AutoBid::class, 'user_id');
    }
}
