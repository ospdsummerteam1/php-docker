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
		try{		
				$user = Socailite::driver('twitter')->user();
		
		}catch (Exception $e){
			return redirect('auth/twitter');
		}

		$request->session()->put('twitter_access_token',$user->token);
		$request->session()->put('twitter_access_secret',$user->tokenSecret);
		$request->session()->put('twitter_access_token',$user->getName());
		$request->session()->put('twitter_access_token',$user->getAvatar());
		$request->session()->put('profile_choice','twitter_profile');

		return redirect()
							->route('')
							->withInput($request->except(['action','confirming']));
	}

}
