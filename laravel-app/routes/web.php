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
Route::get('mypage','MypageController@index')->middleware('auth');

//Route::get('mypage/', 'MypageController@index');
//Route::get('mypage/{mypage}', 'MypageController@index');
Route::get('mypage/show_answer', 'MypageController@show_answer')->middleware('auth');

/*register*/
Route::get('register/', 'RegisterController@index')->middleware('auth');;
//Route::post('register/', 'RegisterController@post_form');
//Route::get('register/confirm', 'RegisterController@confirm');
Route::get('register/confirm', 'RegisterController@confirm')->middleware('auth');
Route::post('register/confirm', 'RegisterController@post_confirm')->middleware('auth');

Route::get('register/end', 'RegisterController@end')->middleware('auth');
Route::post('register/end', 'RegisterController@post_end')->middleware('auth');


/*answer*/
Route::get('answer/{answer}', 'AnswerController@index')->middleware('auth');
Route::post('answer/confirm', 'AnswerController@post_confirm')->middleware('auth');
Route::post('answer/end', 'AnswerController@post_end')->middleware('auth');

/*twitter*/
Route::get('twitter','TwitterController@RedirectToProvider');
Route::get('twitter_callback','TwitterController@handleProviderCallback');
Route::get('twitter_follow','TwitterController@followUser');

//Route::Auth()
// Authentication Routes...
Route::get('login', [
    'as' => 'login',
    'uses' => 'MypageController@login'
]);
Route::post('login', [
    'as' => '',
    'uses' => 'MypageController@login'
]);

//Route::Auth();