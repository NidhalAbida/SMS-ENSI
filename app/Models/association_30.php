<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class association_30 extends Model
{
    //use HasFactory;
    protected $table = 'association_30';
    protected $fillable = [
        'LOGIN',
        'IDFILIERE',
        'NIVEAU',
        'IDMATIERE',
        'NOMCLASSE',
        'ID_EVALUATION',
        'NOTEEVALUATION',
        'OBSERVATION',
    ];
    public $timestamps = false;
 
    }




