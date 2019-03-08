<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagicController extends Controller
{
  // public function __construct(){
  //
  //   $this->middleware('auth.Admin')->except(['index']);
  //   $this->middleware('auth')->except(['index']);
  // }
    public function index()
    {
        return view ('magic.index');
    }

}
