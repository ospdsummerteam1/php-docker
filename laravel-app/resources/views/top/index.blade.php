@extends('layout.common')
@extends('layout.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <div class="container">
                    <h1>楽天コレクター</h1>
                    <div class="container">
                        <div class="row">
                            <form method="get" action="{{url('/search')}}">
                                <div class="input-group">
                                    <input type="text" name="keyword" class="form-control">
                                    <span class="input-group-btn">
                            <input class="btn btn-default" type="submit" value="検索">
                            </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <h1>最新投稿一覧</h1>
                        <div>
                            {{--{{$post}}--}}
                            @foreach($posts as $post)
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <a class="pull-left" href="{{url("/detail-").$post['item_id']}}">
                                            <div class="panel panel-default">
                                                <img src="{{ $post->img }}">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h2>{{ $post->title }}</h2>
                                            <p>{{ $post->detail }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
