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
        $auction_startdate = date_create($this->startDate);
        $date_convert = date_format($auction_startdate, "Y-m-d H:i:s");
        // $date_end_convert = date_format($this->endDate, "Y-m-d H:i:s");
        if($date_convert > date('Y-m-d H:i:s')){ // auction is not started yet
            return "pending";
        }
        // elseif($date_convert < date('Y-m-d H:i:s') && $this->is_hidden ==0 && $date_convert >  date('Y-m-d H:i:s')){
        //     return "running";
        // }
        elseif($date_convert < date('Y-m-d H:i:s') && $this->is_hidden ==0){ // auction in progress
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
