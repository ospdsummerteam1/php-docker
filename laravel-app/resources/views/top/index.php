<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <title>Page Title</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
                    <a class="navbar-brand" href="#">楽天コレクター</a>
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
        <div class="jumbotron">
            <div class="container">
                <h1>楽天コレクター</h1>
                <div class="container">
                    <div class="row">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class='glyphicon glyphicon-search'></i>
                        </button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <a class="pull-left" href="#">
                        <div class="panel panel-default">
                            <img src="">

                            <p>aaaaaaaaaa</p>
                        </div>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">見出し</h4>
                    </div>
                </div>

                <ul class="media-list">
                    <li class="media">
                        <a class="pull-left" href="#">
                            <div class="panel panel-default">
                                <img src="">

                                <p>aaaaaaaaaa</p>
                            </div>

                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">見出し</h4>
                        </div>
                    </li>
                </ul>
            </div>
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
<script src="js/bootstrap.min.js"></script>
</body>
</html>