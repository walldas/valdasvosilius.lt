<?php

namespace App\Http\Controllers;

use App\Porfolio;
use Illuminate\Http\Request;

class PorfolioController extends Controller
{
  // public function __construct(){
  //   $this->middleware('auth.Admin')->except(['index']);
  //   $this->middleware('auth')->except(['index']);
  // }
    public function index()
    {
        $porfolios=Porfolio::all();
        return view('porfolio.index',compact('porfolios'));
    }

    public function create()
    {
        return view('porfolio.form');
    }
    public function store(Request $request)
        {
            if ($request->hasFile('img')){
                $file = $request->file('img');
                $file->store('public');
                $img = $file->hashName();
            }
            $this->validate($request, [
              'title' => 'required|max:255',
              'img' => 'required|max:5120',
              'textColor' => 'required|max:255',
              'description' => 'required|max:255',

            ]);
            Porfolio::create([
                'title' => $request->get('title'),
                'img' => $request->$img = $file->hashName(),
                'description' => $request->get('description'),
                'textColor' => $request->get('textColor')
                ]);

            return redirect()->route('porfolios.index');
        }
    public function show($id)
    {
    }
    public function edit($id)
    {
      $porfolio=Porfolio::find($id);
      return view('porfolio.form',compact('porfolio'));
    }
    public function update(Request $request, $id)
    {
      $porfolio=Porfolio::find($id);
      if ($request->hasFile('img')){
          $file = $request->file('img');
          $file->store('public');
          $porfolio->$img = $file->hashName();
      }
          $porfolio->title = $request->get('title');
          $porfolio->description = $request->get('description');
          $porfolio->textColor = $request->get('textColor');
          $porfolio->save();
      return redirect()->route('porfolios.index');
    }
    public function destroy($id)
    {
      $porfolio=Porfolio::find($id);
      $porfolio->delete();
      return redirect()->route('porfolios.index');
    }
}
