<?php

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
//    $users=\App\User::all();
    $users=\App\User::paginate(5);
    return view('welcome',compact('users'));
});
Route::get('/sendMail',function(){
    \Illuminate\Support\Facades\Mail::to('18950168892@163.com')->send(new \App\Mail\WelcomeToLaravel());
});
