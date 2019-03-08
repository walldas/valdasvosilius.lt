<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChineseCalendarController extends Controller
{
    public function index(){
      return view('chineseCalendar.index');
    }
}
