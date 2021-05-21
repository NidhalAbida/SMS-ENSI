<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seance extends Model
{  
    protected $table = 'seance';
   // use HasFactory;
   protected $fillable = [
    'IDFILIERE',
    'NIVEAU',
    'NOMCLASSE',
    'DATESEM',
    'NUMJOUR',
    'HEUREDEB',
    'IDMATIERE',
    'ID_OBJECTIF',
    'HEUREFIN',
    'NOMSALLE',
    'SEANCE_ASSUREE',
    'RAISON_ANNULATION',
];    public $timestamps = false;
protected $primaryKey = 'HEUREDEB';
  public $incrementing = false;
  protected $keyType = 'string';
public function objectifseance(){
    return $this->belongsTo('App\Models\objectifseance','HEUREDEB','ID_OBJECTIF'); 
 } 
 public function emploi_du_temps(){
    return $this->belongsTo('App\Models\emploi_du_temps','HEUREDEB','DATESEM'); 
 } 
 public function matiere(){
    return $this->belongsTo('App\Models\matiere','HEUREDEB','IDMATIERE'); 
 } 
 


}
