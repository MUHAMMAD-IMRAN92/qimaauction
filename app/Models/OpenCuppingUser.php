<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenCuppingUser extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','email'];
}
