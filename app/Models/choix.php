<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class choix extends Model
{
  //  use HasFactory;
    protected $table = 'choix';
    protected $fillable = [
      'NUMCHOIX',
      'TEXTECHOIX',
      'CORRECTE',
  ];
  protected $primaryKey = 'NUMCHOIX';
  public $incrementing = false;
  public $timestamps = false;
  public function question(){
    return $this->belongsToMany('App\Models\question','choixquestions','NUMCHOIX','ID_QUESTION'); 
}
public function question2(){
  return $this->belongsToMany('App\Models\question','reponseeleve','NUMCHOIX','ID_QUESTION'); 
}
public function compte(){
   return $this->belongsToMany('App\Models\compte','reponseeleve','NUMCHOIX','LOGIN'); 
} 
public function devoirmaison(){
  return $this->belongsToMany('App\Models\devoirmaison','reponseeleve','NUMCHOIX','ID_DEVOIR'); 
}



}
