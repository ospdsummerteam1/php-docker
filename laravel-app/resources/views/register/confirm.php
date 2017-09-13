<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>出品確認</title>
		<link href=“../vendor/twbs/bootstrap/dist/css/bootstrap.min.css” rel=“stylesheet”>
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  <script src=“../vendor/twbs/bootstrap/dist/js/bootstrap.min.js”></script>
		<![endif]-->
	</head>

	<body>
    <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                  <div class="navbar-header">
                      <!--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"-->
                      <!--                            aria-expanded="false" aria-controls="navbar">-->
                      <!--                    </button>-->
                      <a class="navbar-brand" href="#">楽天コレクター</a>
                  </div>
                  <div id="navbar" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav">
                          <li><a href="#">Home</a></li>
                      </ul>

  <!--                    これは、ログイン後のメニュー-->
                      <ul class="nav navbar-nav pull-right">
                          <li><a href="<?=isset($login)?'{user_name}':'ログイン'?>"><?=isset($login)?'{user_name}':'ログイン'?></a></li>
                      </ul>
                  </div><!--/.nav-collapse -->
              </div>
  	</nav>


		<h1>出品確認</h1>
    <div class="main_image">
      <img src="http://t2-workshop.com/wp-content/uploads/2017/05/fb66fcca77b69868214830faf050823f.jpg" align="left" class="img-rounded" hspace="3" width="320" height="240">
      メイン画像<br>
      あああああああああああああああああああああああああああ（商品の説明）
    </div><br clear="left">

    <div class="sub_image">
    <table border="0">
      <tr>
        <td>
          <img src="https://i.ytimg.com/vi/xUKrZSNB44o/maxresdefault.jpg" class="img-rounded" hspace="3" width="240" height="160">
          <p>
            セット１<br>
            ああああああああああ（説明）
        </td>
        <td>
          <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/n/niwaka-6-nki/20161014/20161014205307.jpg" class="img-rounded" hspace="3" width="240" height="160">
          <p>
            セット２<br>
            ああああああああああ（説明）
        </td>
        <td>
          <img src="http://blogimg.goo.ne.jp/user_image/28/14/b409dad95cdbde8688afdf924db07948.jpg" class="img-rounded" hspace="3" width="240" height="160">
          <p>
            セット３<br>
            ああああああああああ（説明）
        </td>
      </tr>
    </table>
    </div>

    <div class="quesion1">
      <p align="left" ><font size="5">質問１</font></p>
      <p align="left">あああああああああああああああああ（質問１）</p>
    </div><br>

    <div class="quesion2">
      <p align="left" ><font size="5">質問２</font></p>
      <p align="left">あああああああああああああああああ（質問２）</p>
    </div><br>

    <div class="quesion3">
      <p align="left" ><font size="5">質問３</font></p>
      <p align="left">あああああああああああああああああ（質問３）</p>
    </div><br>

    <button type="button" class="btn btn-default">戻る</button>
    <button type="button" class="btn btn-primary">登録</button>

	</body>
</html>
