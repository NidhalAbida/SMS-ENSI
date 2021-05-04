<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //use HasFactory;
    protected $table = 'matiere';
    protected $fillable = [
        'IDMATIERE',
        'INTITULE',
    ];
    protected $primaryKey = 'IDMATIERE';
    public $incrementing = false;
    public $timestamps = false;
    public function niveau(){
        return $this->belongsToMany('App\Models\niveau','matiereniveau','IDMATIERE','NIVEAU'); 
      }
    public function evaluation(){
        return $this->hasMany('App\Models\evaluation','ID_EVALUATION','IDMATIERE'); 
     }
     public function matieresclasse(){
        return $this->hasMany('App\Models\matieresclasse','ID_MATIERECLASSES','IDMATIERE'); 
     }
     public function devoirmaison(){
        return $this->hasMany('App\Models\devoirmaison','ID_DEVOIR','IDMATIERE'); 
     }
     public function seance(){
        return $this->hasMany('App\Models\seance','HEUREDEB','IDMATIERE'); 
     }



}
