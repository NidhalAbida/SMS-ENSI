<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cours extends Model
{   protected $table = 'ressource';
    //use HasFactory;
    protected $fillable = [
        'ID_RESSOURCE',
        'INTITULE',
        'TYPE',
        'DETAILS',
    ];
    protected $primaryKey = 'ID_RESSOURCE';
    public $incrementing = false;
    public $timestamps = false;
    public function objectifseance(){
        return $this->hasMany('App\Models\objectifseance','ID_OBJECTIF','ID_RESSOURCE'); 
     } 

}
