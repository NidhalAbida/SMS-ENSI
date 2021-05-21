<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matieresclasse extends Model
{   
    protected $table = 'matiereclasse';
    //use HasFactory;
    protected $fillable = [
        'IDFILIERE',
        'NIVEAU',
        'NOMCLASSE',
        'IDMATIERE',
        'LOGIN',
        'ID_MATIERECLASSES',
    ];    public $timestamps = false;

    protected $primaryKey = 'ID_MATIERECLASSES';
    public $incrementing = false;
    public function compte(){
        return $this->belongsTo('App\Models\compte','ID_MATIERECLASSES','LOGIN'); 
     }
     public function matiere(){
        return $this->belongsTo('App\Models\matiere','ID_MATIERECLASSES','IDMATIERE'); 
     }
     public function classe(){
        return $this->belongsTo('App\Models\classe','ID_MATIERECLASSES','NOMCLASSE'); 
     }
}
