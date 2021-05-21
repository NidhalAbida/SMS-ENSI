<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forumquestion extends Model
{
    protected $table = 'forumquestion';
  
    protected $fillable = [
        'id',
        'INTITULE',
        'MOTS',
        'DETAILS',
        'LOGIN',
        'created_at',
        'updated_at',
    ];
   
    public $incrementing = true;
    public $timestamps = true;
    public function forumreponse(){
        return $this->hasMany('App\Models\forumreponse'); 
     } 
    public function compte(){
        return $this->belongsTo('App\Models\compte','id','LOGIN');
    }
}
