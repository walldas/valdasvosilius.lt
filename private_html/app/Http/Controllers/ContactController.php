<?php

namespace App\Http\Controllers;
use App\User;
use App\Contact;
use App\Cvtitle;
use Illuminate\Http\Request;

class ContactController extends Controller
{

  // public function __construct(){
  //   $this->middleware('auth.Admin')->except(['index','store','destroy']);
  //   $this->middleware('auth')->except(['index','store','destroy']);
  // }
    public function index(){
      $users=User::all();
      $cvtitles=Cvtitle::all();
      $contacts=Contact::all();
      return view('contacts.index',compact('users','contacts','cvtitles'));

    }
    public function store(Request $request)
    {
      $contacts=new Contact();
      $contacts->comentar=$request->comentar;
      $contacts->userName=\Auth::user()->name;
      $contacts->userId=\Auth::user()->id;
      $this->validate($request, [
        'comentar' => 'required|max:255',
      ]);
      $contacts->save();
      return redirect()->route('contacts.index');
    }
    public function destroy($id)
    {

        $contact= Contact::find($id);
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
