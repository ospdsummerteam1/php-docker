<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use Twitter;
use Session;
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
        $request->session()->put('twitter_user_id',$user->id);
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

    /*ログインユーザーが指定されたuserをフォロー*/
    public function followUser(Request $request){
        //認証情報の取得
        $request_token = [
            'token'  => Session::get('twitter_access_token'),
            'secret' => Session::get('twitter_access_secret'),
        ];
//        var_dump(Session::get('twitter_access_token'), Session::get('twitter_access_secret'));
        Twitter::reconfig($request_token);

        try
        {
            $screen_name = 'luneciela';
            $user = Twitter::getUsers(['screen_name' => $screen_name]);
            $response = Twitter::postFollow(['screen_name'=> "$screen_name", 'user_id'=> "$user->id"]);
        }
        catch (Exception $e)
        {
            // dd(Twitter::error());
            dd(Twitter::logs());
        }
//        dd("$screen_name");
    }

    /*運営がuserへDMを送る*/
    public function sendDM(Request $request){
        //認証情報の取得
        $request_token = [
            'token'  => '908399816186642432-mFqfc44l0f6hls03H9jzJmsCH7tPDad',//Session::get('twitter_access_token'),
            'secret' => 'WxVH3v9Ve3AGfdhpGQLHiJKfE0xq2OnxpDvb1o0LfZ0BX',//Session::get('twitter_access_secret'),
        ];
//        var_dump(Session::get('twitter_access_token'), Session::get('twitter_access_secret'));
        Twitter::reconfig($request_token);

        try
        {
            $user_id = Session::get('twitter_user_id');
            $user = Twitter::getUsers(['user_id' => $user_id]);
            $response = Twitter::postDM(['screen_name'=> "$user->screen_name", 'user_id'=> "$user->id",
                'text' => "そろそろ相手の方に連絡してみませんか"]);
        }
        catch (Exception $e)
        {
            // dd(Twitter::error());
            dd(Twitter::logs());
        }
//        dd("$user");
//        var_dump($user);
    }


}
