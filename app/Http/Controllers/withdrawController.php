<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class withdrawController extends Controller
{
    public function index()
    {
       return view('user.withdraw');     
    }
    public function store(Request $req)
    {
        $balance = (int)Auth::user()->Balance;
        $amount = $balance - (int)$req->amount;
    if($amount >= 0)
    {
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['Balance' => $amount]);

        $a = DB::table('transaction')->insert(['sender'=>Auth::user()->id,'receiver'=>$req->name,'amount'=>$req->amount,'date'=>date("y/m/d"),'type'=>'withdraw']);
        if($a)
        {
         return response()->json(['success'=>"Withdraw Successful"]); 
        }
        else
        {
            return response()->json(['success'=>"Withdraw Failed"]);
        }
    }
    else
    {
        return response()->json(['success'=>"Not Enough money"]);
    }
    }
    public function rechargeIndex()
    {
        return view('user.recharge');
    }
    public function rechargeStore(Request $req)
    {
        $balance = (int)Auth::user()->Balance;
        $amount = $balance - (int)$req->amount;
    if($amount >= 0)
    {
        DB::table('users')
        ->where('id', Auth::user()->id)
        ->update(['Balance' => $amount]);

        $a = DB::table('transaction')->insert(['sender'=>Auth::user()->id,'receiver'=>$req->name,'amount'=>$req->amount,'date'=>date("y/m/d"),'type'=>'withdraw']);
        if($a)
        {
         return response()->json(['success'=>"recharge Successful"]); 
        }
        else
        {
            return response()->json(['success'=>"recharge Failed"]);
        }
    }
    else
    {
        return response()->json(['success'=>"Not Enough money"]);
    }
    }
    
}
