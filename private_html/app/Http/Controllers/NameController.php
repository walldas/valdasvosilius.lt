<?php

namespace App\Http\Controllers;

use App\Name;
use App\User;
use Illuminate\Http\Request;

class NameController extends Controller
{

    // public function __construct(){
    //
    //   $this->middleware('auth.Admin')->except(['index','show','create','store','update','destroy']);
    //   $this->middleware('auth')->except(['index']);
    // }

    public function index()
    {

      $names=Name::query()->orderBy('priceMin', 'desc')->get();
      $users=User::all();

      return view('name.index',compact('names','users'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('name.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $name=new Name();
      $name->title=$request->title;
      $name->description=$request->description;
      $name->priceMin=$request->priceMin;
      $name->priceMax=$request->priceMax;
      $name->status=$request->status;
      $name->user_id=\Auth::user()->id;

      $this->validate($request, [
          'title' => 'required|max:255',
          'description' => 'required',
          'priceMin' => 'required|numeric',
          'priceMax' => 'required|numeric',
          'status' => 'required|max:255',

        ]);



      $name->save();
      return redirect()->route('names.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users=User::all();
         return view('name.show', ['name' => Name::findOrFail($id)],compact('name','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $name=Name::find($id);
      return view('name.form',compact('name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $name=Name::find($id);
      $name->title=$request->title;
      $name->description=$request->description;
      $name->priceMin=$request->priceMin;
      $name->priceMax=$request->priceMax;
      $name->status=$request->status;

      $this->validate($request, [
          'title' => 'required|alpha|max:255',
          'description' => 'required',
          'priceMin' => 'required|numeric|required',
          'priceMax' => 'required|numeric|required',
          'status' => 'required|required|max:255',
        ]);


      $name->update();
      return redirect()->route('names.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $name= Name::find($id);
        $name->delete();
        return redirect()->route('names.index');
    }

}
