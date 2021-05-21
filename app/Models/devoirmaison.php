<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devoirmaison extends Model
{
    protected $table = 'devoirmaison';

   // use HasFactory;
   protected $fillable = [
    'ID_DEVOIR',
    'IDMATIERE',
    'IDFILIERE',
    'NOMCLASSE',
    'NIVEAU',
    'INTITULE',
    'ENNONCE',
    'LOGIN',
    'DATE_LIMITE',
    'DATE_RENDU',
    'TYPEDEVOIR',
    'ADRESSEMAIL',
    'created_at',
    'updated_at',
   
    'fichier',
];
protected $primaryKey = 'ID_DEVOIR';
public $timestamps = true;
public $incrementing = false;
public function compte(){
    return $this->belongsToMany('App\Models\compte','TravailEffectue','LOGIN','ID_DEVOIR'); 
  }
public function question(){
    return $this->belongsToMany('App\Models\question','possede','ID_QUESTION','ID_DEVOIR'); 
  }
public function matiere(){
    return $this->belongsTo('App\Models\matiere','ID_DEVOIR','IDMATIERE'); 
}  
public function classe(){
    return $this->belongsTo('App\Models\classe','ID_DEVOIR','NOMCLASSE'); 
} 


public function choix(){
  
  return $this->belongsToMany('App\Models\choix','reponseeleve','NUMCHOIX','ID_DEVOIR'); 
  }
public function question2(){
    return $this->belongsToMany('App\Models\question','reponseeleve','ID_QUESTION','ID_DEVOIR'); 
  }
public function compte2(){
    return $this->belongsToMany('App\Models\compte','reponseeleve','LOGIN','ID_DEVOIR'); 
  }
  public function compte3(){
    return $this->belongsTo('App\Models\compte','ID_DEVOIR','LOGIN');
}
  
  

}
