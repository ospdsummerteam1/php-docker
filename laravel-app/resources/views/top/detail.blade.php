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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script defer src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" />\
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script defer src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script defer src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <script defer src="js/jquery.bxslider.min.js"></script>
    <script defer type="text/javascript">
        $(document).ready(function() {
            $('.bxslider').bxSlider();
        });
    </script>
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
                <h1>〇〇〇〇</h1>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="media">
                <div class="panel panel-default pull-left">
                    <img src="" style="width: 300px;height: 200px">
                </div>
                <div class="media-body text-center">
                    <h2 class="media-heading">タイトル</h2>
                    <p>説明ああああああああああああああああああああああああああああ<br>あああああああああああああああああああああああああああああああああ<br></p>
                </div>
            </div>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <h5>分割配送分</h5>
            <ul class="bxslider">
                <li><img src="../asset/images/sample-01.png" alt="" style="width: 300px;height: 200px"></li>
                <li><img src="../asset/images/sample-02.png" alt="" style="width: 300px;height: 200px"></li>
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
