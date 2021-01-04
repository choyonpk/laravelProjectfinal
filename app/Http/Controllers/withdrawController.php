<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class withdrawController extends Controller
{
    public function index()
    {
       return view('user.withdraw');     
    }
    public function store()
    {
        
    }
    public function rechargeIndex()
    {
        return view('user.recharge');
    }
    public function rechargeStore()
    {
        
    }
}
