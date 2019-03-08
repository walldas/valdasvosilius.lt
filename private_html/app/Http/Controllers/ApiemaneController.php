<?php

namespace App\Http\Controllers;

use App\Apiemane;
use App\Cvtitle;
use Illuminate\Http\Request;

class ApiemaneController extends Controller
{
  // public function __construct(){
  //
  //   $this->middleware('auth.Admin')->except(['index']);
  //   $this->middleware('auth')->except(['index']);
  // }
    public function create()
    {
        return view ('cv.apiemaneForm');
    }
    public function store(Request $request)
    {
      $apiemane=new Apiemane();
      $apiemane->about=$request->about;
      $apiemane->save();
      $this->validate($request, [
          'about' => 'required',
        ]);
      return redirect()->route('cvLapas');
    }
    public function edit($id)
    {
      $apiemane=Apiemane::find($id);
        return view('cv.apiemaneForm',compact('apiemane'));
    }
    public function update(Request $request, $id)
    {
      $apiemane=Apiemane::find($id);
        $apiemane->about=$request->about;
        $this->validate($request, [
            'about' => 'required',
          ]);
        $apiemane->update();
        return redirect()->route('cvLapas');
    }
}
