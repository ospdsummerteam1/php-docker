<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //商品番号を受取質問の回答ページを表示
    public function index()
    {
        $questions = array("red", "blue", "green");
        return view('answer.index',compact("questions"));
    }

    //post answer/
    public function post_quest(Request $request){
        $allanswers = $request->all();
        return view('answer.confirm',compact("allanswers"));
    }

    //
    public function post_confirm(Request $request){
        $value = $request->all();


        if($value == "edit"){
            return view('answer.confirm',compact("allanswers"));
        }else{
            return view('answer.confirm',compact("allanswers"));
        }
    }
}
