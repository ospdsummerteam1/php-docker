<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Answer;
use App\Models\Application;
use App\Models\Item;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    // get mypage/{mypage}
    public function index()
    {
        //ログインしていなければloginページに飛ばす
//        Item::all();
//        return view('mypage.index');
        $authuser = Auth::user();
        $id = $authuser->user_id;
        $user_query = User::query();
        $user = $user_query->where('user_id', $id)->get()->toArray()[0];

        # 投稿した商品
        $itemquery = Item::query();
        $user_items = $itemquery->where('user_id', "$id")->get()->toArray();

        #申し込みした商品
        $signupquery = Application::query();
        $signup = $signupquery->join('items', "applications.item_id", '=', 'items.item_id')
            ->where('applications.user_id', $user['user_id'])->where('applications.status', 1)->get()->toArray();

        $resive = [];

        #申し込みされた商品
        foreach ($user_items as $item) {
            $resivequery = Application::query();
            $res = $resivequery->join('users', "applications.user_id", '=', 'users.user_id')
                ->where('applications.item_id', $item['item_id'])->where('applications.status',1)->get()->toArray();

            if (!empty($res)) {
                $resive[] = $res[0];
            }
        }
        return view('mypage.index', compact("user", "user_items", "signup", "resive"));
    }

    // post mypage/
    public function mypage_post(Request $request)
    {
        //id, password照合
        //okならmypageに飛ばしてだめならloginへ
//        return view('mypage.show_answer');
    }

    // get mypage/answer/
    public function show_answer(Request $request)
    {
        $id = $request->all();

        $answerquery = Answer::query();
        $answer = $answerquery->where('application_id', $id)->get()->toArray();

        foreach ($answer as $answer_id)
        {
            $query = Question::query();
            $question[] = $query->where('question_id', $answer_id['question_id'])->get()->toArray();
        }

        $data[] = array_merge($answer[0],$question[0][0],$id);
        $data[] = array_merge($answer[1],$question[1][0],$id);
        $data[] = array_merge($answer[2],$question[2][0],$id);

        return view('mypage.show_answer', compact('data'));
    }

    public function result(Request $request){
        $id = $request->all();

        if (array_keys($id)[0] === "not"){
            $query = Application::query();
            $query ->where('application_id',$id)
                ->update(['status'=>0]);
            return redirect('/mypage');
        } else{
            $query = Application::query();
            $query ->join('items','applications.item_id','=','items.item_id')
                ->where('applications.application_id', $id)
                ->update(['items.status'=>0],['applications.status'=>0]);
            return redirect('/');
        }


    }

    /*login*/
    //get login/
    public function login()
    {
        return view('mypage.login');
    }
}
