<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable=[
      'title','status','workWith','moreInfo','start','end','imgLink','webLink'
    ];
}
