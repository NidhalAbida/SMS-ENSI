<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compte extends Model
{
   //use HasFactory;
   protected $table = 'compte';
   protected $fillable = [
      'LOGIN',
      'ELE_LOGIN',
      'IDFILIERE',
      'NIVEAU',
      'NOMCLASSE',
      'ID_BULLETIN',
      'INTITULE',
      'PRENOM',
      'NUMTEL',
      'GENDER',
      'PWD',
      'DATENAIS',
      'ACTIVE_STATUS',
      'TYPE_COMPTE',
      'POSTE',
      'SPECIALITE',
  ];
  protected $primaryKey = 'LOGIN';
  public $incrementing = false;
  protected $keyType = 'string';

  public $timestamps = false;

  public function classe(){
   return $this->belongsTo('App\Models\classe','LOGIN','NOMCLASSE'); 
} 

  public function bulletin(){
   return $this->hasMany('App\Models\bulletin','ID_BULLETIN','LOGIN'); 
} 


public function compte(){
   return $this->hasMany('App\Models\compte','LOGIN','LOGIN'); 
} 
  public function evaluation(){
   return $this->belongsToMany('App\Models\evaluation','association_30','LOGIN','ID_EVALUATION'); 
 }
 public function devoirmaison(){
   return $this->belongsToMany('App\Models\devoirmaison','TravailEffectue','LOGIN','ID_DEVOIR'); 
 }
  public function choix(){
   return $this->belongsToMany('App\Models\choix','reponseeleve','LOGIN','NUMCHOIX'); 
 }
  public function question(){
   return $this->belongsToMany('App\Models\question','reponseeleve','LOGIN','ID_QUESTION'); 
 }
  public function devoirmaison2(){
   return $this->belongsToMany('App\Models\devoirmaison','reponseeleve','LOGIN','ID_DEVOIR'); 
 }
 public function User()
 {
     return $this->hasOne(User::class,'user_id','id');
 }
 
}
