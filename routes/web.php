<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'auth'], function () {
    Auth::routes();
});

Route::get('/home', 'HomeController@index')->name('home');   

Route::get('/agent', 'agentController@index')->name('agent.home.index')->middleware('agent');  

Route::group(['middleware' => ['auth','user']], function () {

    Route::get('/user', 'userController@index')->name('user.home.index');  
    Route::get('/sendMoney', 'sendMoneyController@index')->name('sendMoney');   
    Route::post('/sendMoney', 'sendMoneyController@store');   
    Route::get('/transaction','transactionController@index')->name('transaction');
    Route::get('/changePass','changePassController@index')->name('changePass');//middleware for prevent direct access using the url
    Route::post('/changePass','changePassController@change')->name('changePass');
    
    Route::get('/update', 'profileUpdateController@index')->name('profile.update');   
    Route::post('/update', 'profileUpdateController@store'); 
    
    Route::post('/pic', 'HomeController@picUp')->name('pic'); 
    
    Route::get('/download', 'transactionController@pdf')->name('download');   
    
    Route::get('/bio','transactionController@bio')->name('bio'); 

    Route::get('/withdraw', 'withdrawController@index')->name('withdraw'); 
    Route::post('/withdraw', 'withdrawController@store'); 

    Route::get('/recharge', 'withdrawController@rechargeIndex')->name('recharge'); 
    Route::post('/recharge', 'withdrawController@rechargeStore'); 
    
});


Route::get('/logout', 'logOutController@logout')->name('logout.custom');   

