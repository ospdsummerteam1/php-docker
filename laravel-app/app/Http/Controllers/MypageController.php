<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    // get mypage/
    public function index()
    {
        //ログインしていなければloginページに飛ばす
//        Item::all();
        return view('mypage.index');
    }
    // post mypage/
    public function mypage_post(){
        return view('mypage.show_answer');
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
    //post login/
    public function login_post(){

    }

}
