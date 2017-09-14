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

/*top*/
Route::resource('/', 'TopController');
Route::get('/search', 'TopController@search');
Route::get('/detail-{id}', 'TopController@detail');

/*mypage*/
Route::get('login/', 'MypageController@login');
Route::post('login/', 'MypageController@login_post');

Route::get('mypage/', 'MypageController@index');
Route::get('mypage/show_answer', 'MypageController@show_answer');
Route::post('mypage/', 'MypageController@mypage_post');

/*register*/
Route::get('register/', 'RegisterController@index');
Route::post('register/', 'RegisterController@post_form');

Route::get('register/confirm', 'RegisterController@confirm');
Route::post('register/confirm', 'RegisterController@post_confirm');

Route::get('register/end', 'RegisterController@end');

/*answer*/
Route::get('answer', 'AnswerController@index');
Route::post('answer', 'AnswerController@post_quest');

Route::get('answer/confirm', 'AnswerController@confirm');
Route::post('answer/confirm', 'AnswerController@post_confirm');

Route::get('answer/end', 'AnswerController@end');
