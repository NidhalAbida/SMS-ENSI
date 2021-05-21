<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bulletin extends Model
{
  //  use HasFactory;
    protected $table = 'bulletin';
    protected $fillable = [
      'ID_BULLETIN2',
      'TRIMESTRE',
      'ANNEE_SCOLAIRE',
      'EMPLACEMENTFICHIER',
  ];
  protected $primaryKey = 'ID_BULLETIN2';
  public $incrementing = false;
  public $timestamps = false;
  public function compte(){
    return $this->belongsTo('App\Models\compte','ID_BULLETIN2','LOGIN'); 
} 


}
