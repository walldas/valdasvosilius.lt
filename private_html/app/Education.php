<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable=['institution','profesion','imgLink','webLink',
    'start','end','finalTitle','finalLocation','skills'
    ];

}
