<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
   // use HasFactory;
   protected $table = 'classe';
    protected $fillable = [
      'IDFILIERE',
      'NIVEAU',
      'NOMCLASSE',
  ];
  protected $primaryKey = 'NOMCLASSE';
  public $incrementing = false;
  protected $keyType = 'string';
  public $timestamps = false;
  public function niveau(){
   return $this->belongsTo('App\Models\niveau','NOMCLASSE','NIVEAU'); 
} 
public function devoirmaison(){
   return $this->hasMany('App\Models\devoirmaison','ID_DEVOIR','NOMCLASSE'); 
}
public function evaluation(){
   return $this->hasMany('App\Models\evaluation','ID_EVALUATION','NOMCLASSE'); 
}
public function emploi_du_temps(){
   return $this->hasMany('App\Models\emplois_du_temps','DATESEM','NOMCLASSE'); 
}
public function compte(){
   return $this->hasMany('App\Models\compte','LOGIN','NOMCLASSE'); 
} 
public function matieresclasse(){
   return $this->belongsTo('App\Models\matieresclasse','NOMCLASSE','ID_MATIERECLASSES'); 
} 

}