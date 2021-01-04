<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\user;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {
      // return view('home'); 
      // $type = Auth::user()->type;
      if(Auth::user()->type == 'user')
      {
        return redirect()->route('user.home.index');
      }
      else if(Auth::user()->type == 'agent')
      {
        return redirect()->route('agent.home.index');
      }
      else
      {      
        return redirect()->route('login');
      }     
    }
    public function picUp(Request $req)
    {
      if($req->hasfile('image'))
        {
          $file = $req->image;
          $ext = $file->getClientOriginalExtension();
          $filename = Auth::user()->id.'.'.$ext;
          $file->move('upload',$filename);
          $user = user::find(Auth::user()->id);
          $user->pic = $filename; 
          $user->save();
          // Auth::user()->pic = $filename;
          // Auth::user()->save();
        }
        return redirect()->route('user.home.index'); 
    }
} 
