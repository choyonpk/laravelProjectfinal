<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\Auth;
use Illuminate\Http\Request;
use app\user;
class profileUpdateController extends Controller
{
    public function index()
    {        
        return view('user.profile.update')
        ->with('name',Auth::user()->name)
        ->with('email',Auth::user()->email)
        ->with('phone',Auth::user()->phone);
    }
    public function store(Request $req)
    {
        $user = user::find(Auth::user()->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->save();
        return redirect()->route('user.home.index');
    }
}
