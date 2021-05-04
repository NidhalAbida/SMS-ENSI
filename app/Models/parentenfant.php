<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parentenfant extends Model
{
    protected $table = 'parentenfant';
    //use HasFactory;
    protected $fillable = [
        'id',
        'LOGINPARENT',
        'LOGINENFANT',
   
        
    ];    public $timestamps = false;
}
