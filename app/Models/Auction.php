<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;
    public function images()
    {
        return $this->hasMany(Image::class, 'auction_id' ,'id' );
    }

    public function auctionStatus(){
        if($this->startDate > date('Y-m-d H:i:s')){ // auction is not started yet
            return "pending";
        }elseif($this->startDate < date('Y-m-d H:i:s') && $this->is_hidden ==0){ // auction in progress
            return "active";
        }
        // elseif($this->startDate < date('Y-m-d H:i:s') && $this->is_hidden ==1){
        //     return "ended";
        // }
        else{
            return "ended";
        }
    }
}
