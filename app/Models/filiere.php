<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    //   use HasFactory;
    protected $table = 'filiere';
    protected $fillable = [
        'IDFILIERE',
        ];
        protected $primaryKey = 'IDFILIERE';
        public $incrementing = false;
        protected $keyType = 'string';


        public $timestamps = false;

        public function niveau(){
            return $this->hasMany('App\Models\niveau','NIVEAU','IDFILIERE'); 
         }

}
