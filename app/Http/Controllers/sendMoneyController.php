<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;




class sendMoneyController extends Controller
{
    public function index()
    {
        // $a = date("h:i:sa");
        // $a = 'abc';
        // $b = Crypt::encryptString($a);
        // $c = Crypt::decryptString( $b);
        return view('user.sendMoney.sendMoney');
    }
    public function store()
    {
        // $jsonString = file_get_contents(base_path('contract_Code.json'));
        // $data = json_decode($jsonString,true);
        //  $func = $data["send Money"];
        // //  echo($func);
        // // $func;
        // // $func(sendMoney());
        // // $data->sendMoney->send();
        // $func();
        // dd($data);    
        
        
    }
}
