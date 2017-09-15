@extends('layout.common')
@extends('layout.header')
@section('content')
    <div class="container">
        <div class="row">
            <h2>マイページ</h2>
            <div class="panel-body">
                <div class="media">
                    <a class="pull-left" href="#">
                        <div class="panel panel-default">
                            <img src="{{$user['icon']}}" width="200px">
                        </div>
                    </a>
                    <div class="media-body">
                        <h3 class="media-heading">{{$user['user_name']}}</h3>
                        <p>{{$user['introduction']}}</p>
                    </div>
                </div>
            </div>

            <div class="input-group">
                <a class="btn btn-lg btn-block btn-conbutton" href="{{url('/register')}}">投稿する</a>
            </div>

            <div class="container">
                <h3>投稿したコレクション</h3>
                <div class="row">
                    <div class="list-group">
                        @foreach($user_items as $items)
                            <div class="row">
                                <div class="list-group-item clearfix">
                                    <div class="profile-teaser-left">
                                        <div class="profile-img"><img src={{"image/".$items["img"]}}/></div>
                                    </div>
                                    <div class="profile-teaser-main">
                                        <h2 class="profile-name">{{$items["title"]}}</h2>
                                        <div class="profile-info">
                                            <div class="info"><span class="">Detail:</span> {{$items["detail"]}}</div>
                                            <div class="info"><span class="">Status:</span> {{$items["status"]}}</div>
                                        </div>
                                    </div>
                                </div><!-- item -->
                            </div>
                        @endforeach
                    </div>
                </div>

                <h3>申し込みされたコレクション</h3>
                <div class="row">
                    <div class="list-group">
                        @foreach($resive as $res)
                            <div class="list-group-item clearfix">
                                <div class="profile-teaser-left col-md-4">
                                    <div class="profile-img"><img
                                                src="{{$res['icon']}}" width="200px"/></div>
                                </div>
                                <div class="profile-teaser-main col-md-8">
                                    <h2 class="profile-name">{{$res['user_name']}}</h2>
                                    <form action="{{url('mypage/show_answer')}}" method="get">
                                        <input type="hidden" name="id" value="{{$res['application_id']}}">
                                        <input type="submit" value="回答を見る" class="btn btn-lg btn-warning">
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div><!-- item -->
                </div>
                <h3>申し込んだコレクション</h3>
                <div class="row">
                    <div class="list-group">
                        @foreach($signup as $sine)
                            <div class="row">
                                <div class="list-group-item clearfix">
                                    <div class="profile-teaser-left col-md-4">
                                        <div class="profile-img">
                                            <img src="{{"image/".$sine['img']}}"/></div>
                                    </div>
                                    <div class="profile-teaser-main col-md-8">
                                        <h2 class="name">{{$sine['title']}}</h2>
                                    </div>
                                </div><!-- item -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
