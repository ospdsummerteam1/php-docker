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
Route::get('mypage/', 'MypageController@login');
Route::get('mypage/{mypage}', 'MypageController@index');
Route::get('mypage/show_answer', 'MypageController@show_answer');
/*register*/
Route::get('register/', 'RegisterController@index');
//Route::post('register/', 'RegisterController@post_form');
//Route::get('register/confirm', 'RegisterController@confirm');
Route::post('register/confirm', 'RegisterController@post_confirm');
Route::post('register/end', 'RegisterController@post_end');
/*answer*/
Route::get('answer/{answer}', 'AnswerController@index');
Route::post('answer/confirm', 'AnswerController@post_confirm');
Route::post('answer/end', 'AnswerController@post_end');

/*twitter*/
Route::get('twitter','TwitterController@RedirectToProvider');
Route::get('twitter_callback','TwitterController@handleProviderCallback');

Route::get('register/confirm', 'RegisterController@confirm');
Route::post('register/confirm', 'RegisterController@post_confirm');

Route::get('register/end', 'RegisterController@end');