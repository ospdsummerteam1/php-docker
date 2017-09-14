@extends('layout.common')
@extends('layout.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <div class="container">
                    <h3>検索結果</h3>
                    <div class="container">
                        <div class="row">
                            <form action="{{url('/search')}}" method="get">
                                <div class="input-group">
                                    <input type="text" name="keyword" class="form-control"
                                           value="{{(isset($keyword))?$keyword:null}}">
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
                <div class="panel-body pagenate">
                    <div class="media">
                        <div>
                            {{--{{$post}}--}}
                            @if(count($data)>=1)
                                @foreach($data as $post)
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <a class="pull-left" href="{{url("/detail/").$post['item_id']}}">
                                                <div class="panel panel-default">
                                                    <img src="{{"image/".$post['img'] }}">

                                                </div>
                                            </a>
                                            <div class="media-body">
                                                <h2>{{ $post["title"]}}</h2>
                                                <p>{{ $post['detail'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h4><?=$keyword . 'が該当する出品はありません'?></h4>
                            @endif
                        </div>
                        <div class="paginate">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop