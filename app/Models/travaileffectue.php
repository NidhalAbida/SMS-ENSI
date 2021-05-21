<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travaileffectue extends Model
{   
    protected $table = 'travaileffectue';

    //use HasFactory;
    protected $fillable = [
        'LOGIN',
        'IDFILIERE',
        'NIVEAU',
        'IDMATIERE',
        'NOMCLASSE',
        'ID_DEVOIR',
        'DATE_RENDU',
        'FAIT',
    ];   
     public $timestamps = false;

}
