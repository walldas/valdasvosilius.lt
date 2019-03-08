<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
protected $fillable=[
  'title','status','priceMin','priceMax','description'
];
  public function user (){
    return $this->belongsTo('App\User');
  }
}
