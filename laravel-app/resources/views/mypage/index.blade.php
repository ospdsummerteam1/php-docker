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
                            <img src="{{$iconurl = $user['icon']}}" width="200px">
                            {{--<p>aaaaaaaaaa</p>--}}
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
                            <div class="list-group-item clearfix">
                                <div class="profile-teaser-left">
                                    <div class="profile-img"><img src={{$items["img"]}}/></div>
                                </div>
                                <div class="profile-teaser-main">
                                    <h2 class="profile-name">{{$items["title"]}}</h2>
                                    <div class="profile-info">
                                        <div class="info"><span class="">Detail:</span> {{$items["detail"]}}</div>
                                        <div class="info"><span class="">Status:</span> {{$items["status"]}}</div>
                                        {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                                        {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                                    </div>
                                </div>
                            </div><!-- item -->
                        @endforeach
                    </div>
                </div>

                <h3>返答された商品</h3>
                <div class="row">
                    <div class="list-group">
                        @foreach($resive as $res)
                            <div class="list-group-item clearfix">
                                <div class="profile-teaser-left">
                                    {{--<div class="profile-img"><img src={{$user_items[0]["img"]}}/></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="profile-teaser-main">--}}
                                    {{--<h2 class="profile-name">{{$selected_items[0]["title"]}}</h2>--}}
                                    {{--<div class="profile-info">--}}
                                    {{--<div class="info"><span class="">Detail:</span> {{$selected_items[0]["detail"]}}</div>--}}
                                    {{--<div class="info"><span class="">Status:</span> {{$selected_items[0]["status"]}}</div>--}}
                                    {{--</div>--}}
                                    <div class="profile-img"><img
                                                src="{{$res['icon']}}"/></div>
                                </div>
                                <div class="profile-teaser-main">
                                    <h2 class="profile-name">{{$res['user_name']}}</h2>
                                    <div class="profile-info">
                                        <div class="info"><span class="">Info:</span> Something here</div>
                                        <div class="info"><span class="">Info:</span> Something here</div>
                                        <div class="info"><span class="">Info:</span> Something here</div>
                                        <div class="info"><span class="">Info:</span> Something here</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div><!-- item -->
                </div>
            </div>
            <div class="container">
                <h3>質問した商品</h3>
                <div class="row">
                    <div class="list-group">
                        @foreach($signup as $sine)
                            <div class="list-group-item clearfix">
                                <div class="profile-teaser-left">
                                    <div class="profile-img">
                                        <img src="{{$sine['img']}}"/></div>
                                </div>
                                <div class="profile-teaser-main">
                                    <h2 class="name">{{$sine['title']}}</h2>
                                    <div class="info">
                                        <div class="info"><span class="">Info:</span> Something here</div>
                                        <div class="info"><span class="">Info:</span> Something here</div>
                                        <div class="info"><span class="">Info:</span> Something here</div>
                                        <div class="info"><span class="">Info:</span> Something here</div>
                                    </div>
                                </div>
                            </div><!-- item -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop