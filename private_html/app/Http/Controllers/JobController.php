<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
  // public function __construct(){
  //
  //   $this->middleware('auth.Admin');
  //
  // }

    public function create()
    {
      return view ('cv.jobForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $job=new Job();
      $job->title=$request->title;
      $job->status=$request->status;
      $job->workWith=$request->workWith;
      $job->moreInfo=$request->moreInfo;
      $job->start=$request->start;
      $job->end=$request->end;
      $job->imgLink=$request->imgLink;
      $job->webLink=$request->webLink;

      $this->validate($request, [
          'title' => 'required|max:255',
          'status' => 'required|max:255',
          'workWith' => 'required',
          'moreInfo' => 'required',
          'start' => 'required|date',
          'end' => 'required|date',
          'imgLink' => 'required',
          'webLink' => 'required',
        ]);

      $job->save();
      return redirect()->route('cvLapas');
    }


    public function edit($id)
    {
      $job=Job::find($id);
      return view('cv.jobForm',compact('job'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $job=Job::find($id);
      $job->title=$request->title;
      $job->status=$request->status;
      $job->workWith=$request->workWith;
      $job->moreInfo=$request->moreInfo;
      $job->start=$request->start;
      $job->end=$request->end;
      $job->imgLink=$request->imgLink;
      $job->webLink=$request->webLink;

      $this->validate($request, [
          'title' => 'required|max:255',
          'status' => 'required|max:255',
          'workWith' => 'required',
          'moreInfo' => 'required',
          'start' => 'required|date',
          'end' => 'required|date',
          'imgLink' => 'required',
          'webLink' => 'required',
        ]);

      $job->update();
      return redirect()->route('cvLapas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $job=Job::find($id);
      $job->delete();
      return redirect()->route('cvLapas');
    }
}
