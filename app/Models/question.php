<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $table = 'question';
    //use HasFactory;
    protected $fillable = [
        'ID_QUESTION',
        'QUESTION',
        'TYPEQUESTION',
        'REPONSE',
    ];
    protected $primaryKey = 'ID_QUESTION';
    public $incrementing = false;
    public $timestamps = false;
    public function choix2(){
        return $this->belongsToMany('App\Models\choix','choixquestions','ID_QUESTION','NUMCHOIX'); 
    }
    public function choix(){
      return $this->belongsToMany('App\Models\choix','reponseeleve','ID_QUESTION','NUMCHOIX'); 
    }
    public function compte(){
       return $this->belongsToMany('App\Models\compte','reponseeleve','ID_QUESTION','LOGIN'); 
    } 
    public function devoirmaison(){
      return $this->belongsToMany('App\Models\devoirmaison','reponseeleve','ID_QUESTION','ID_DEVOIR'); 
    }

    public function devoirmaison2(){
        return $this->belongsToMany('App\Models\devoirmaison','possede','ID_QUESTION','ID_DEVOIR'); 
    }
    
    
}
