<?php

namespace App\Http\Controllers;

use App\Leisure;
use Illuminate\Http\Request;

class LeisureController extends Controller
{
  // public function __construct(){
  //   $this->middleware('auth.Admin');
  // }

    public function create()
    {
        return view ('cv.leisureForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $leisure=new Leisure();
      $leisure->title=$request->title;
      $leisure->moreInfo=$request->moreInfo;
      $this->validate($request, [
          'title' => 'required|max:255',
          'moreInfo' => 'max:255',
        ]);

      $leisure->save();
      return redirect()->route('cvLapas');
    }

    public function edit( $id)
    {
        $leisure=Leisure::find($id);
        return view('cv.leisureForm',compact('leisure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leisure  $leisure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $leisure=Leisure::find($id);

      $leisure->title=$request->title;
      $leisure->moreInfo=$request->moreInfo;
      $this->validate($request, [
          'title' => 'required|max:255',
          'moreInfo' => 'max:255',
        ]);
      $leisure->update();
      return redirect()->route('cvLapas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leisure  $leisure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $leisure=Leisure::find($id);
      $leisure->delete();
      return redirect()->route('cvLapas');
    }
}
