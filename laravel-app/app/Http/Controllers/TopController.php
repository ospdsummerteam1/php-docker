<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function index(){

//        try {
//            DB::connection()->getPdo();
//        } catch (\Exception $e) {
//            die("Could not connect to the database.  Please check your configuration.");
//        }
        $posts = Item::all();



//        $posts = [
//            'title'=>'aaaa',
//            'detail'=>'aaaaa',
//            'img'=>'aaaaaa'
//        ];
        return view('top/index',compact('posts'));
    }

    public function search(){
        return view('top/list');
    }
}
