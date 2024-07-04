<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    public function governerate()
    {
        return $this->hasOne(Governorate::class, 'id', 'gov_id');
    }
}
