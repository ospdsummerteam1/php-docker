<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AnswerController extends Controller
{
    //商品番号を受取質問の回答ページを表示
    //get answer/
    public function index()
    {
//        $query = Item::query();
//        $query->insert([
//
//        ]);

        $questions = array("red", "blue", "green");
        Session::put("questions",$questions);
        return view('answer.index',compact("questions"));
    }

    //post answer/confirm
    public function post_confirm(Request $request){
        $allanswers = $request->all();
        Session::put("allanswers",$allanswers);
        return view('answer.confirm',compact("allanswers"));
    }

    //post answer/end
    public function post_end(Request $request){
        $value = $request->get("button");

        $allanswers = Session::get("allanswers");
        $questions = Session::get("questions");

        if($value == "submit"){
            return view('answer.end');
        }else if($value == "edit"){
            return view('answer.index',compact("questions","allanswers"));
        }
    }

    //get answer/end

}
