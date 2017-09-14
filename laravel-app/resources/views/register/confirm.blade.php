<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>出品確認</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
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
		<?php echo csrf_field(); ?>
    <div class="main_image">
      <img src="http://t2-workshop.com/wp-content/uploads/2017/05/fb66fcca77b69868214830faf050823f.jpg" align="left" class="img-rounded" hspace="3" width="320" height="240">
				 <label for="OutputTitle">
					 <p>
					 {{$item["title"]}}
				 </p>
					 <br>
					 <p>
					 {{$item["detail"]}}
				 </p>
		 </div><br clear="left">

    <div class="sub_image">
    <table class="table" border="0">
      <tr class="tr">
        <td class="td1">
          <img src="https://i.ytimg.com/vi/xUKrZSNB44o/maxresdefault.jpg" class="img-rounded" hspace="3" width="240" height="160">
          <p class="set1">
            <label for="OutputSet1">セット１<br>
							<p>
	 					 {{$item["image1-detail"]}}

	 				 </p>
        </td>
        <td class="td2">
          <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/n/niwaka-6-nki/20161014/20161014205307.jpg" class="img-rounded" hspace="3" width="240" height="160">
          <p class="set2">
            <label for="OutputSet2">セット２<br>
							<p>
	 					 {{$item["image2-detail"]}}

	 				 </p>
        </td>
        <td class="td3">
          <img src="http://blogimg.goo.ne.jp/user_image/28/14/b409dad95cdbde8688afdf924db07948.jpg" class="img-rounded" hspace="3" width="240" height="160">
          <p class="set3">
            <label for="OutputSet2">セット３<br>
							<p>
	 					 {{$item["image3-detail"]}}

	 				 </p>
        </td>
      </tr>
    </table>
    </div>

    <div class="quesion1">
      <label for="question1">質問１<br>
      <label for="Outputquestion1">
				<p>
				{{$item["question1"]}}

			</p><br>
    </div><br>

    <div class="quesion2">
			<label for="question2">質問２<br>
      <label for="Outputquestion2">
				<p>
					{{$item["question2"]}}

			</p><br>
    </div><br>

    <div class="quesion3">
			<label for="question3">質問３<br>
      <label for="Outputquestion3">
				<p>
				{{$item["question3"]}}

			</p><br>
    </div><br>

		<div class="form_conf" style="display:inline-flex">
                <form method="post" action="/register/end">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-submit btn-default" name="button" value="submit">登録</button>
                </form>
                <form method="get" action="/register/">
                    <button type="submit" class="btn btn-edit btn-default" >編集</button>
                </form>
           </div>


		<!--<a href="/register/end" class="btn btn-default ">登録</a>
		<br><br>
		<a href="/register/index" class="btn btn-default ">戻る</a>-->


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</body>
</html>
