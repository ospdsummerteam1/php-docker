<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;

use App\Models\User;
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
	public function handleProviderCallback(Request $request)
	{
		try{
            $user = Socialite::driver('twitter')->user();
		}catch (Exception $e){
			return redirect('auth/twitter');
		}

		//sessionに導入
		$request->session()->put('twitter_access_token',$user->token);
		$request->session()->put('twitter_access_secret',$user->tokenSecret);
		$request->session()->put('twitter_access_token',$user->name);
		$request->session()->put('twitter_access_token',$user->avatar_original);
		$request->session()->put('profile_choice','twitter_profile');

        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser);

		return redirect('/mypage');
	}

    /*ユーザーがあれば作る なければ登録する*/
    private function findOrCreateUser($twitterUser)
    {
        $authUser = User::where('user_id', $twitterUser->id)->first();
        if ($authUser){
            return $authUser;
        }

        return User::create([
            'user_id' => $twitterUser->id,
            'user_name' => $twitterUser->name,
            'introduction' => $twitterUser->user['description'],
            'icon' => $twitterUser->avatar_original
        ]);
    }



}
