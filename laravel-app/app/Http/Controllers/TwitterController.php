<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Http\Requests;
use App\Http\Controllers\Controllers;

class TwitterController extends Controller
{
	/*ユーザーをTwitterの認証ページにリダイレクトする*/
	public function redirectToProvider()
	{
		return Socialite::driver('twitter')->redirect();	
	}

	/*Twitterからユーザー情報を取得する*/
	public function handleProviderCallback()
	{
		$user = Socailite::driver('twitter')->user();
		
		'twitter'=>[
					'client_id' => env('TWTTER_CLIENT_ID') ,//envファイルに記載
					'client_secret' => env('CALLBACK_URL'),
					'redict' => env('CALLBACK_URL'),
		],

		//oath two providers
		$response .= print_r($user,true);//bool print_r( mixed expression [, bool return ] )
		return $response;
	}

}


