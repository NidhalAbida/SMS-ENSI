<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reponseeleve extends Model
{    
    protected $table = 'reponseeleve';
    //use HasFactory;
    protected $fillable = [
        'NUMCHOIX',
        'ID_QUESTION',
        'LOGIN',
        'IDFILIERE',
        'NIVEAU',
        'IDMATIERE',
        'NOMCLASSE',
        'ID_DEVOIR',
    ];    public $timestamps = false;

    
}
