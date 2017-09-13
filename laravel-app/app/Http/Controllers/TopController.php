<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(){

        $query = Item::query();
        $posts = $query -> where('status',1)->get();

        return view('top/index',compact('posts'));
    }

    public function search(Request $request){

        $keyword = $request->input('keyword');

        #クエリ生成
        $query = Item::query();

        #もしキーワードがあったら
        if(!empty($keyword))
        {
            $query->where('title','like','%'.$keyword.'%')
                ->where('status',1)
                ->orWhere('detail','like','%'.$keyword.'%')
                -> where('status',1);
        }
        $data = $query->orderBy('item_id','desc')->paginate(10);

        return view('top/list',compact('keyword','data'));
    }

    public function detail($item_id){
        $query = Item::query();

        $query->where('item_id','where',$item_id);
        $data = $query;

        return view('top/detail',compact('data'));
    }
}
