<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluation extends Model
{
    //use HasFactory;
    protected $table = 'evaluation';
    protected $fillable = [
        'IDMATIERE',
        'IDFILIERE',
        'NIVEAU',
        'NOMCLASSE',
        'ID_EVALUATION',
        'DATEEEVALUATION',
        'COEFFICIENT',
        'TRIMESTRE',
    ];
    protected $primaryKey = 'ID_EVALUATION';
    public $incrementing = false;
    public $timestamps = false;
    public function compte(){
        return $this->belongsToMany('App\Models\evaluation','association_30','ID_EVALUATION','LOGIN'); 
      }
      public function classe(){
        return $this->belongsTo('App\Models\classe','ID_EVALUATION','NOMCLASSE'); 
     }
     public function matiere(){
        return $this->belongsTo('App\Models\matiere','ID_EVALUATION','IDMATIERE'); 
     }
}
