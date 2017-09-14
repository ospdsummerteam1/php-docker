<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Item;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    // get mypage/{mypage}
    public function index($id)
    {
        //ログインしていなければloginページに飛ばす
//        Item::all();
//        return view('mypage.index');

        $user_query = User::query();
        $user = $user_query->where('user_id', $id)->get()->toArray();

        # 投稿した商品
        $itemquery = Item::query();
        $user_items = $itemquery->where('user_id', "$id")->get()->toArray();

        # 返答された商品
//        $answered_item_id = array();
//        $answer_query = Answer::query();
//
//        $j = $answer_query->where('application_id', 2)->exists();
//        var_dump($j);
//        for($i = 0; $i < count($user_items); ++$i) {
//            $j = $answer_query->where('application_id', $user_items[$i]['item_id'])->exists();
////            var_dump($user_items[$i]['item_id'], $j);
//            if ($j==true){
//                array_push($answered_item_id, $user_items[$i]['item_id']);
//            }
//        }
//        var_dump($answered_item_id);
//        $selected_items = $itemquery->where('item_id', $answered_item_id)->get()->toArray();
//        var_dump($selected_items[0]["title"]);
//        $user_items = Item::all()->where("user_id", $id);
//        $user_items = Item::where('user_id', $id)->get();
        # 質問した商品
//        $name = $user[0]['user_name'];
//        $iconurl = $user[0]['icon'];
//        $introduction = $user[0]['introduction'];
//        $user_id = $user[0]['user_id'];
//        $user_data = array($name, $introduction,$iconurl, $user_id);
//        var_dump($user);
//        exit();
        return view('mypage.index', compact("user", "user_items", "selected_items"));
    }

    // post mypage/
    public function mypage_post(Request $request){
        //id, password照合
        //okならmypageに飛ばしてだめならloginへ
//        return view('mypage.show_answer');
    }

    // get mypage/answer/
    public function show_answer(){
        return view('mypage.show_answer');
    }

    /*login*/
    //get login/
    public function login(){
        return view('mypage.login');
    }
}
