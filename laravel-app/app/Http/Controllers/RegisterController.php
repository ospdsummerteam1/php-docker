<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
      $data2['test1']=1;
      return view('register.index', compact('data2'));
    }

    public function confirm(){
      $data['test1']=_GET['test1'];
      $data['test2']=_GET['test2'];
      return view('register.confirm', compact('data'));
    }

    public function end(){
      $data['test1']=_GET['test1'];
      $data['test2']=_GET['test2'];

      item($data);

      return view('register.end');
    }
}
