<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //商品番号を受取質問の回答ページを表示
    public function index($id)
    {
        //viewに商品に対する質問渡す
        return view('answer.confirm')->with([
            "Q_1" => "aaaaaaaaaaa",
            "Q_2" => "bbbbbbbbbbb",
            "Q_3" => "ccccccccccc",
        ]);
    }

    //
    public function confirm(){

    }

    public function end(){

    }
}
