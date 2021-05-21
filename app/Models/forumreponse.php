<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forumreponse extends Model
{
    protected $table = 'forumreponse';
  
    protected $fillable = [
        'id',
        'INTITULE',
        'DETAILS',
        'id_forumquestion',
        'LOGIN',
        'created_at',
        'updated_at',
    ];
   
    public $incrementing = true;
    public $timestamps = true;
    public function forumquestion(){
        return $this->belongsTo('App\Models\forumquestion'); 
     } 
    public function compte(){
        return $this->belongsTo('App\Models\compte','id','LOGIN');
    }

}
