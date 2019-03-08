<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
  // public function __construct(){
  //
  //   $this->middleware('auth.Admin');
  //
  // }


    public function create()
    {
        return view ('cv.educationForm');
    }


    public function store(Request $request)
    {
      $education=new Education();
      $education->institution=$request->institution;
      $education->profesion=$request->profesion;
      $education->imgLink=$request->imgLink;
      $education->webLink=$request->webLink;
      $education->start=$request->start;
      $education->end=$request->end;
      $education->finalTitle=$request->finalTitle;
      $education->finalLocation=$request->finalLocation;
      $education->skills=$request->skills;

      $this->validate($request, [
          'institution' => 'required|max:255',
          'profesion' => 'required|max:255',
          'imgLink' => 'required',
          'webLink' => 'required',
          'end' => 'required|date',
          'start' => 'required|date',
          'finalTitle' => 'required|max:255',
          'finalLocation' => 'required|max:255',
          'skills' => 'required|max:255',
        ]);

      $education->save();
      return redirect()->route('cvLapas');
    }


    public function edit($id)
    {
      $education=Education::find($id);
      return view('cv.educationForm',compact('education'));

    }


    public function update(Request $request, $id)
    {
      $education=Education::find($id);
      $education->institution=$request->institution;
      $education->profesion=$request->profesion;
      $education->imgLink=$request->imgLink;
      $education->webLink=$request->webLink;
      $education->start=$request->start;
      $education->end=$request->end;
      $education->finalTitle=$request->finalTitle;
      $education->finalLocation=$request->finalLocation;
      $education->skills=$request->skills;

      $this->validate($request, [
          'institution' => 'required|max:255',
          'profesion' => 'required|max:255',
          'imgLink' => 'required',
          'webLink' => 'required',
          'end' => 'required|date',
          'start' => 'required|date',
          'finalTitle' => 'required|max:255',
          'finalLocation' => 'required|max:255',
          'skills' => 'required|max:255',
        ]);

      $education->update();
      return redirect()->route('cvLapas');
    }

    public function destroy($id)
    {
      $education=Education::find($id);
      $education->delete();
      return redirect()->route('cvLapas');
    }
}
