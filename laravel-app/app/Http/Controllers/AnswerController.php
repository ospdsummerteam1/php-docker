<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Item;
use App\Models\Question;
use Illuminate\Http\Request;
use Session;

class AnswerController extends Controller
{
    //商品番号を受取質問の回答ページを表示
    //get answer/
    public function index()
    {
//        $questions = array("red", "blue", "green");
//        Session::put("questions",$questions);
//        return view('answer.index',compact("questions"));
    }

    public function show($id)
    {
        $qu = Question::query()->where('item_id', $id)->get();

        $qu0 = $qu[0]['question'];
        $qu1 = $qu[1]['question'];
        $qu2 = $qu[2]['question'];

        $id_qu0 = $qu[0]['question_id'];
        $id_qu1 = $qu[1]['question_id'];
        $id_qu2 = $qu[2]['question_id'];

        $questions = array($qu0, $qu1, $qu2);
        $question_ids = array($id_qu0, $id_qu1, $id_qu2);


        Session::put("questions",$questions);
        Session::put("question_ids",$question_ids);

        Session::put("application_id", $id);

//        Session::put("question_id", $id);
        return view('answer.show',compact("questions"));
    }

    //post answer/confirm
    public function post_confirm(Request $request){
        $answers = $request->all();
        Session::put("answers",$answers);

        $questions = Session::get("questions");

        return view('answer.confirm',compact("answers","questions"));
    }

    //post answer/end
    public function post_end(Request $request){
        $value = $request->get("button");

        if($value == "submit"){
            $question_ids = Session::get("question_ids");
            $answers = Session::get("answers");
            $id = Session::get("application_id");

            Answer::query()->insert([
                ['answer' => $answers["answer0"], 'question_id' => $question_ids[0], 'application_id' => $id],
                ['answer' => $answers["answer1"], 'question_id' => $question_ids[1], 'application_id' => $id],
                ['answer' => $answers["answer2"], 'question_id' => $question_ids[2], 'application_id' => $id]
            ]);
            return view('answer.end');
        }else if($value == "edit"){
            return view('answer.index',compact("questions"));
        }
    }

    //get answer/end

}
