<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentToJury extends Model
{
    use HasFactory;
    protected $table = 'sample_sent_to_jury';

    public function juries()
    {
        return $this->belongsToMany(Jury::class);
    }
}
