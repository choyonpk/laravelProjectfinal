<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use DB;
use App\user;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     protected $redirectTo = RouteServiceProvider::HOME;
     protected function redirectTo()
     {
        return '/user'; 
     }
     public function redirectToProvider()
     {
         return Socialite::driver('facebook')->redirect();
     }
 
     /**
      * Obtain the user information from GitHub.
      *
      * @return \Illuminate\Http\Response
      */
     public function handleProviderCallback()
     {
        $user = Socialite::driver('facebook')->user();
        $check = DB::table('users')->where('email',$user->email)->first();

        if($check)
        {    
            Auth::loginUsingId($check->id);
            return redirect('/user');
        }
        else
        {
            $data = new user;
            $data->name = $user->name;
            $data->email = $user->email;
            $data->password = bcrypt('1234');
            $data->save();
            Auth::login($data);
            return redirect('/user');
        }
        
     }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
}
