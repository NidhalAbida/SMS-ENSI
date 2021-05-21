<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emploi_du_temps extends Model
{
    use HasFactory;
    protected $table = 'emploi_du_temps';
    protected $fillable = [
        'IDFILIERE',
        'NIVEAU',
        'NOMCLASSE',
        'DATESEM',
        'NUMSEM',
    ];   
    protected $primaryKey = 'DATESEM';
    public $incrementing = false;
    protected $keyType = 'string';
     public $timestamps = false;

    public function classe(){
        return $this->belongsTo('App\Models\classe','DATESEM','NOMCLASSE'); 
     } 
     public function seance(){
        return $this->hasMany('App\Models\seance','HEUREDEB','DATESEM'); 
     } 
    
}
