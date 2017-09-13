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
    return view('top.index');
});

Route::get('/answer', function (){
   return view('answer.index');
});

Route::get('/mypage', function (){
    return view('mypage.index');
});

Route::get('/login', function (){
    return view('mypage.login');
});

Route::get('/register', function (){
    return view('register.index');
});