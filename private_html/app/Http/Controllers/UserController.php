<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Name;
class UserController extends Controller
{
  public function profile()
    {
        $user = \Auth::user();
        $title = 'Atnaujinti profilį';

        return view('auth.register', compact('user', 'title'));
    }
public function update(Request $request)
    {
        $user = \Auth::user();
        $user->name = $request->name;
        $user->surename = $request->surename;
        $user->company = $request->company;
        $user->phone = $request->phone;
        $user->city = $request->city;

        $user->save();
        return redirect()->route('names.index');
    }
    public function index(){
      $users=User::all();
      $names=Name::all();
      return view('auth.index',compact('users','names'));
    }
    public function destroy($id){
      $user= User::find($id);
      $user->delete();
      return redirect()->route('user.index');
    }
}
