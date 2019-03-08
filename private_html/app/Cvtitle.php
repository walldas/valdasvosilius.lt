<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cvtitle extends Model
{
  protected $fillable=[
    'myName','status','address','email','phone','dob'
  ];
    public $timestamps = false;

}
