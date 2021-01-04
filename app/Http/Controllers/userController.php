<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class userController extends Controller
{
    public function index()
    {
        return view('user.home.index')->with('balance',Auth::user()->Balance)->with('pic',Auth::user()->pic);
    }
}
