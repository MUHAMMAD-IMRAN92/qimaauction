<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Jury extends Model
{
    use HasFactory;

    // public function getIdAttribute($value)
    // {
    //     return Crypt::encryptString($value);
    // }
}
