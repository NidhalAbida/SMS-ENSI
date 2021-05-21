<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ressource extends Model
{  protected $table = 'ressource';
    //use HasFactory;
    protected $fillable = [
        'ID_RESSOURCE',
        'LOGIN',
        'INTITULE',
        'TYPE',
         'DETAILS',
        'fichier',
    ];
    protected $primaryKey = 'ID_RESSOURCE';
    public $incrementing = false;
    public $timestamps = true;
    public function objectifseance(){
        return $this->hasMany('App\Models\objectifseance','ID_OBJECTIF','ID_RESSOURCE'); 
     } 
    public function compte(){
        return $this->belongsTo('App\Models\compte','ID_RESSOURCE','LOGIN');
    }

}
