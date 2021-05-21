<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matiereniveau extends Model
{       
    protected $table = 'matiereniveau';
    //use HasFactory
    protected $fillable = [
        'IDFILIERE',
        'NIVEAU',
        'IDMATIERE',
        'COEFF',
    ];    public $timestamps = false;

}
