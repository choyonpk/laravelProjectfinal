<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;

class changePassController extends Controller
{
    public function index()
    {
        return view('user.password.changePass');
    }
    public function change(Request $req)
    {
        $validated = $req->validate([
            'pass' => 'required|max:255',
            'con_pass' => 'required',
        ]);
        $pass = Hash::make($req->pass);
        $user = user::where('id',Auth::user()->id);
        $user = user::find(Auth::user()->id);
        $user->password = $pass ;
        $user->save();
        return redirect('/user');
    }
}
