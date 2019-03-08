<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Porfolio extends Model
{
  protected $fillable=[
    'title','img','description','textColor'
  ];
}
