<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niveau extends Model
{
    protected $table = 'niveau';
    //use HasFactory;
    protected $fillable = [
        'IDFILIERE',
        'NIVEAU',
        
    ];
    protected $primaryKey = 'NIVEAU';
    public $timestamps = false;
    public $incrementing = false;
    public function matiere(){
        return $this->belongsToMany('App\Models\matiere','matiereniveau','NIVEAU','IDMATIERE'); 
      }
    public function filiere(){
        return $this->belongsTo('App\Models\filiere','NIVEAU','IDFILIERE'); 
     }
     public function classe(){
        return $this->hasMany('App\Models\classe','NOMCLASSE','NIVEAU'); 
     } 

}
