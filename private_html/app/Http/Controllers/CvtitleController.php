<?php

namespace App\Http\Controllers;
use App\Cvtitle;
use App\Apiemane;
use App\Skill;
use App\Job;
use App\Education;
use App\Course;
use App\Leisure;
use Illuminate\Http\Request;

class CvtitleController extends Controller
{
  // public function __construct(){
  //   $this->middleware('auth.Admin')->except(['index']);
  //   $this->middleware('auth')->except(['index']);
  // }

  public function index(){
    $cvtitles=Cvtitle::all();
    $apiemanes=Apiemane::all();
    $skills=Skill::all();
    $jobs=Job::all();
    $educations=Education::all();
    $courses=Course::all();
    $leisures=Leisure::all();
    // dump($skills);
    return view('cv.index',
    compact('cvtitles','apiemanes','skills','jobs','educations','courses','leisures')
  );

  }
  public function createCvtitle(){
    return view ('cv.titleForm');
  }


  public function storeCvtitle(Request $request){
    $cvtitle=new Cvtitle();
    $cvtitle->myname=$request->myname;
    $cvtitle->status=$request->status;
    $cvtitle->address=$request->address;
    $cvtitle->email=$request->email;
    $cvtitle->phone=$request->phone;
    $cvtitle->dob=$request->dob;

    $this->validate($request, [
        'myname' => 'required|max:255',
        'status' => 'required|max:255',
        'address' => 'required|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|numeric',
        'dob' => 'required|date|max:255',

      ]);

    $cvtitle->save();
    return redirect()->route('cvLapas');
  }
  public function updateCvtitle(Request $request, $id){
    $cvtitle=Cvtitle::find($id);
    $cvtitle->myname=$request->myname;
    $cvtitle->status=$request->status;
    $cvtitle->address=$request->address;
    $cvtitle->email=$request->email;
    $cvtitle->phone=$request->phone;
    $cvtitle->dob=$request->dob;

    $this->validate($request, [
        'myname' => 'required|max:255',
        'status' => 'required|max:255',
        'address' => 'required|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|numeric',
        'dob' => 'required|date|max:255',

      ]);

    $cvtitle->update();
    return redirect()->route('cvLapas');
  }

  public function editCvtitle($id){
    $cvtitle=Cvtitle::find($id);
    return view('cv.titleForm',compact('cvtitle'));
  }
}
