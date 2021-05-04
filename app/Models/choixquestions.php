<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class choixquestions extends Model
{
    use HasFactory;
    protected $fillable = [
        'NUMCHOIX',
        'ID_QUESTION',
    ];
    public $timestamps = false;
   
}
