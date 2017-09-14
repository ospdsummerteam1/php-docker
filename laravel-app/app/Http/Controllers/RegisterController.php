<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Item;
use App\Models\SendItem;
use App\Models\Question;

class RegisterController extends Controller
{
  public function index(){
    $item = Session::get("item");
    return view('register.index',compact("item"));
  }
  public function post_confirm(Request $request){
    $item = $request->all();
    Session::put("item",$item);
    return view('register.confirm', compact("item"));
  }
  public function post_end(Request $request){
      $item = Session::get("item");
      var_dump($item);
      $id = Item::query()->insertGetId(
                ['img' => "http://t2-workshop.com/wp-content/uploads/2017/05/fb66fcca77b69868214830faf050823f.jpg", 'title' => $item["title"], 'detail' => $item["detail"], 'user_id' => 5]
              );

      SendItem::query()->insert([
                ['img' => "http://t2-workshop.com/wp-content/uploads/2017/05/fb66fcca77b69868214830faf050823f.jpg", 'item_id' => $id, 'detail' => $item["image1-detail"]],
                ['img' => "http://t2-workshop.com/wp-content/uploads/2017/05/fb66fcca77b69868214830faf050823f.jpg", 'item_id' => $id, 'detail' => $item["image2-detail"]],
                ['img' => "http://t2-workshop.com/wp-content/uploads/2017/05/fb66fcca77b69868214830faf050823f.jpg", 'item_id' => $id, 'detail' => $item["image3-detail"]]
            ]);

      Question::query()->insert([
               ['question' => "question1", 'item_id' => $id],
               ['question' => "question2", 'item_id' => $id],
               ['question' => "question3", 'item_id' => $id]
            ]);
      $request->session()->forget('item');
      return view('register.end',compact("item"));
  }


  /*public function post_form(Request $request){
      $allanswers = $request->all();
      var_dump($allanswers);
      Session::put("allanswers",$allanswers);
      return view('register.confirm', compact("allanswers"));
  }*/
}
