<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <title>楽天コレクター</title>

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
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">楽天コレクター</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">

                    <!--                    これは、ログイン後のメニュー-->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?= isset($login) ? url("/mypage") : url("/login") ?>"><?= isset($login) ? '{user_name}' : 'ログイン' ?></a>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <h1>出品確認</h1>
        <?php echo csrf_field(); ?>
        <div class="main_image">
            <img src="http://t2-workshop.com/wp-content/uploads/2017/05/fb66fcca77b69868214830faf050823f.jpg"
                 align="left" class="img-rounded" hspace="3" width="320" height="240">
            <label for="OutputTitle">
                <?=(isset($data['item']['title'])) ? $data['item']['title'] : null?>
                <br>
                <?=(isset($data['item']['detail'])) ? $data['item']['detail'] : null?>
            </label>
        </div>
        <br clear="left">

        <div class="sub_image">
            <table class="table" border="0">
                <tr class="tr">
                    @foreach($data['send_item'] as $send)
                        <td>
                            <img src="{{$send['img']}}" class="img-rounded" hspace="3"
                                 width="240" height="160">
                            <p class="set1">
                                <label for="OutputSet1">セット<br>
                            <p>{{$send['detail']}}</p>

                            </label>
                        </td>
                    @endforeach
                </tr>
            </table>
        </div>

        @foreach($data['ques'] as $ques)
            <div class="quesion">
                <label for="question">質問<br>
                    <label for="Outputquestion1">
                        <h4>{{$ques['question']}}</h4><br>
                    </label>
                </label>
            </div>
            <br>
        @endforeach

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