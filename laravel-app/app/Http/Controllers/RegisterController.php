<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Auth\Authenticatable;
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
    $item['main_image'] = $item['main_image']->move('/var/www/html/public/image',$this->makeRandStr(6).".jpg")->getFilename();
    $item['image1'] = $item['image1']->move("/var/www/html/public/image",$this->makeRandStr(6).'.jpg')->getFilename();
    $item['image2'] = $item['image2']->move("/var/www/html/public/image",$this->makeRandStr(6).'.jpg')->getFilename();
    $item['image3'] = $item['image3']->move("/var/www/html/public/image",$this->makeRandStr(6).'.jpg')->getFilename();
    Session::put("item",$item);
    return view('register.confirm', compact("item"));
  }
  public function post_end(Request $request){
      $item = Session::get("item");
      $authuser = Auth::user();
      $id = Item::query()->insertGetId(
                ['img' => $item['main_image'], 'title' => $item["title"], 'detail' => $item["detail"], 'user_id' => $authuser->user_id]
              );

      SendItem::query()->insert([
                ['img' => $item['image1'], 'item_id' => $id, 'detail' => $item["image1-detail"]],
                ['img' => $item['image2'], 'item_id' => $id, 'detail' => $item["image2-detail"]],
                ['img' => $item['image3'], 'item_id' => $id, 'detail' => $item["image3-detail"]]
            ]);

      Question::query()->insert([
               ['question' => $item["question1"], 'item_id' => $id],
               ['question' => $item["question2"], 'item_id' => $id],
               ['question' => $item["question3"], 'item_id' => $id]
            ]);
      $request->session()->forget('item');
      return view('register.end',compact("item"));
  }


    /**
     * ランダム文字列生成 (英数字)
     * $length: 生成する文字数
     */
    function makeRandStr($length) {
        $str = array_merge(range('a', 'z'), range('0', '9'), range('A', 'Z'));
        $r_str = null;
        for ($i = 0; $i < $length; $i++) {
            $r_str .= $str[rand(0, count($str) - 1)];
        }
        return $r_str;
    }


    /*public function post_form(Request $request){
        $allanswers = $request->all();
        var_dump($allanswers);
        Session::put("allanswers",$allanswers);
        return view('register.confirm', compact("allanswers"));
    }*/
}
