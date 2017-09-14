<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="ayupoteki">
    <title>Page Title</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mypage.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="#">楽天コレクター</a></h1>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                    </ul>

                    <!--                    これは、ログイン後のメニュー-->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?= isset($login) ? '{user_name}' : 'ログイン' ?>"><?= isset($login) ? '{user_name}' : 'ログイン' ?></a>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <h2>マイページ</h2>
        <div class="panel-body">
            <div class="media">
                <a class="pull-left" href="#">
                    <div class="panel panel-default">
                        <img src="{{$iconurl = $user[0]['icon']}}" width="200px">
                        {{--<p>aaaaaaaaaa</p>--}}
                    </div>
                </a>
                <div class="media-body">
                    <h3 class="media-heading">{{$user[0]['user_name']}}</h3>
                    <p>{{$user[0]['introduction']}}</p>
                </div>
            </div>
        </div>

        <div class="input-group">
            <a class="btn btn-lg btn-block btn-conbutton" href="#">投稿する</a>
        </div>

        <div class="container">
            <h3>投稿したコレクション</h3>
            <div class="row">
                <div class="list-group">
                    <div class="list-group-item clearfix">
                        <div class="profile-teaser-left">
                            <div class="profile-img"><img src={{$user_items[0]["img"]}}/></div>
                        </div>
                        <div class="profile-teaser-main">
                            <h2 class="profile-name">{{$user_items[0]["title"]}}</h2>
                            <div class="profile-info">
                                <div class="info"><span class="">Detail:</span> {{$user_items[0]["detail"]}}</div>
                                <div class="info"><span class="">Status:</span> {{$user_items[0]["status"]}}</div>
                                {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                                {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                            </div>
                        </div>
                    </div><!-- item -->

                    <div class="list-group-item clearfix">
                        <div class="profile-teaser-left">
                            {{--<div class="profile-img"><img src="http://kumazcaps.way-nifty.com/photos/uncategorized/capsfromhongkong2006113001_2.jpg"/></div>--}}
                            <div class="profile-img"><img src={{$user_items[1]["img"]}}/></div>
                        </div>
                        <div class="profile-teaser-main">
                            <h2 class="profile-name">{{$user_items[1]["title"]}}</h2>
                            <div class="profile-info">
                                <div class="info"><span class="">Detail:</span> {{$user_items[1]["detail"]}}</div>
                                <div class="info"><span class="">Status:</span> {{$user_items[1]["status"]}}</div>
                            </div>
                        </div>
                    </div><!-- item -->
                </div>
            </div>
            <h3>返答された商品</h3>
            <div class="row">
                <div class="list-group">
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
                            <div class="profile-img"><img src="https://static.pexels.com/photos/21011/pexels-photo-large.jpg"/></div>
                        </div>
                        <div class="profile-teaser-main">
                            <h2 class="profile-name">Jane Doe</h2>
                            <div class="profile-info">
                                <div class="info"><span class="">Info:</span> Something here</div>
                                <div class="info"><span class="">Info:</span> Something here</div>
                                <div class="info"><span class="">Info:</span> Something here</div>
                                <div class="info"><span class="">Info:</span> Something here</div>
                            </div>
                        </div>
                    </div>
                    </div><!-- item -->
                </div>
            </div>
            {{--<h3>質問した商品</h3>--}}
            {{--<div class="row">--}}
                {{--<div class="list-group">--}}
                    {{--<div class="list-group-item clearfix">--}}
                        {{--<div class="profile-teaser-left">--}}
                            {{--<div class="profile-img"><img src="https://static.pexels.com/photos/21011/pexels-photo-large.jpg"/></div>--}}
                        {{--</div>--}}
                        {{--<div class="profile-teaser-main">--}}
                            {{--<h2 class="profile-name">Jane Doe</h2>--}}
                            {{--<div class="profile-info">--}}
                                {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                                {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                                {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                                {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- item -->--}}

                    {{--<div class="list-group-item clearfix">--}}
                        {{--<div class="profile-teaser-left">--}}
                            {{--<div class="profile-img"><img src="https://static.pexels.com/photos/21011/pexels-photo-large.jpg"/></div>--}}
                        {{--</div>--}}
                        {{--<div class="profile-teaser-main">--}}
                            {{--<h2 class="profile-name">Jane Doe</h2>--}}
                            {{--<div class="profile-info">--}}
                                {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                                {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                                {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                                {{--<div class="info"><span class="">Info:</span> Something here</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- item -->--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

        <footer class="footer">
            <div class="container">
                <div class="pull-right hidden-xs">Version1.0</div>
                <strong>Copyright &copy; 2015</strong>, All rights reserved.
            </div>
        </footer>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>