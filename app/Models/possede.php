<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class possede extends Model
{
    protected $table = 'possede';
    //use HasFactory;
    protected $fillable = [
        'IDFILIERE',
        'NIVEAU',
        'IDMATIERE',
        'NOMCLASSE',
        'ID_DEVOIR',
        'ID_QUESTION',
        'NOTEQUESTQCM',
    ];    public $timestamps = false;

}
