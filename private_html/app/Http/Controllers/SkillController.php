<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
  // public function __construct(){
  //
  //     $this->middleware('auth.Admin');
  // }

    public function create()
    {
          return view('cv.skillForm');
    }


    public function store(Request $request)
    {
      $skill=new Skill();
      $skill->name=$request->name;
      $skill->point=$request->point;
      $this->validate($request, [
          'name' => 'required|max:255',
          'point' => 'required|numeric|between:1,10',
        ]);



      $skill->save();
      return redirect()->route('cvLapas');

    }


    public function edit($id)
    {
        $skill=Skill::find($id);
        return view('cv.skillForm',compact('skill'));
    }


    public function update(Request $request, $id)
    {
      $skill=Skill::find($id);
      $skill->name=$request->name;
      $skill->point=$request->point;
      $this->validate($request, [
          'name' => 'required|max:255',
          'point' => 'required|numeric|between:1,10',
        ]);
      $skill->update();
      return redirect()->route('cvLapas');
    }


    public function destroy($id)
    {
      $skill=Skill::find($id);
      $skill->delete();
      return redirect()->route('cvLapas');
    }
}
