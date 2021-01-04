<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use PDF;

class transactionController extends Controller
{
    public function index()
    {
        $a =Auth::user()->id;
        $response = Http::get('http://localhost:3000/transaction',[
            'id' => $a,
        ]);   
        //dd($response->json());
        return view('user.transaction.history')->with('transaction',$response->json());
    }
    // public function download()
    // {
    //     $customerData = $this->getCustomerData();
    //     // return view ('dynamic_pdf')->
    // }
    function pdf()
    {
        $a =Auth::user()->id;
        $transaction = DB::table('transaction')->where('sender',$a)
        ->orwhere('receiver',$a)->limit(10)->get();
        $pdf = PDF::loadView('user.transaction.download',compact('transaction'));
        return $pdf->download('transaction history.pdf');
    }
    function bio()
    {
        $a =Auth::user()->id;
        $user = DB::table('users')->find($a);
        $date = date("y/m/d");
        $time = date("h:i:sa"); 
        $d = ['date' => $date,
    'time' => $time];
        $pdf = PDF::loadView('user.home.bio',compact('user','d'));
        return $pdf->download('Bank Statement.pdf');
    }

}
