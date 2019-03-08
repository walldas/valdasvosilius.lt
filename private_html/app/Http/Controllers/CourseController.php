<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
  // public function __construct(){
  //   $this->middleware('auth.Admin');
  // }

    public function create()
    {
        return view ('cv.courseForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $course=new Course();
      $course->title=$request->title;
      $course->webLink=$request->webLink;
      $course->info=$request->info;
      $this->validate($request, [
          'title' => 'required|max:255',
          'webLink' => 'required|max:255',
          'info' => 'required',

        ]);

      $course->save();
      return redirect()->route('cvLapas');
    }


    public function edit($id)
    {
      $course=Course::find($id);
        return view('cv.courseForm',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $course=Course::find($id);

      $course->title=$request->title;
      $course->webLink=$request->webLink;
      $course->info=$request->info;
      $this->validate($request, [
          'title' => 'required|max:255',
          'webLink' => 'required|max:255',
          'info' => 'required',

        ]);

      $course->update();
      return redirect()->route('cvLapas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $course=Course::find($id);
      $course->delete();
      return redirect()->route('cvLapas');
    }
}
