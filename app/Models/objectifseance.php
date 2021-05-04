<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objectifseance extends Model
{
    protected $table = 'objectifseance';
    //use HasFactory;
    protected $fillable = [
        'ID_OBJECTIF',
        'ID_RESSOURCE',
        'TITRE',
        'TEXTE_',
        'DATE_',
    ];
    protected $primaryKey = 'ID_OBJECTIF';
    public $incrementing = false;
    public $timestamps = false;

    public function ressource(){
        return $this->belongsTo('App\Models\ressource','ID_OBJECTIF','ID_RESSOURCE'); 
     } 
     public function seance(){
        return $this->hasMany('App\Models\seance','HEUREDEB','ID_OBJECTIF'); 
     } 


}
