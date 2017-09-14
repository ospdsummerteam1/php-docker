<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>出品登録フォーム</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
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

		<h1>出品登録フォーム</h1>
		<form action="/register/confirm" method="post">
			<?php echo csrf_field(); ?>
			<div class="form-group">
				<label for="InputTitle">タイトル<br>
				 <input name='title' class="form-control" id="InputTitle"
				 placeholder="タイトルを入力してください。" value="<?php echo($item['title']);?>">
			 </label>
			</div>
			<div class="form-group">
		    <label for="InputItemDetail">商品説明<br>
		    <input name='detail' class="form-control" id="InputItemDetail" placeholder="商品説明を入力してください。" value="<?php echo($item['detail']);?>"></input><br>
				</label>
	    </div>
			<div class="form-group">
		    <label for="InputQuestion1">質問項目１</label><br>
		    <input name='question1' class="form-control" id="InputItemQuestion1" placeholder="質問項目１を入力してください。" value="<?php echo($item['question1']);?>"></input><br>
				</label>
			</div>
			<div class="form-group">
		    <label for="InputQuestion2">質問項目２</label><br>
		    <input name='question2' class="form-control" id="InputItemQuestion2" placeholder="質問項目２を入力してください。" value="<?php echo($item['question2']);?>"></input><br>
        </label>
			</div>
			<div class="form-group">
		    <label for="InputQuestion3">質問項目３</label><br>
		    <input name='question3' class="form-control" id="InputItemQuestion3" placeholder="質問項目３を入力してください。" value="<?php echo($item['question3']);?>"></input><br>
        </label>
			</div>
		<br>

		<div class="imagePreview"></div>
		<div class="input-group0">
			<label>
				<span class="btn btn-primary">
					全体画像 <input type="file" style="display:none">
				</span>
			</label>
			<input type="text" class="form-control" readonly=""><br>
		</div><br>

		<div class="input-group1">
			<label class="input-group1-btn">
				<span class="btn btn-primary">
					セット１<input type="file" style="display:none" class="uploadFile">
				</span>
			</label>
			<input type="text" class="form-control" readonly=""><br>
			<input name="image1-detail" class="form-control" id="InputSet1" placeholder="セット１の説明を入力してください。" value="<?php echo($item['image1-detail']);?>"></input>
		</div><br>

		<div class="input-group2">
			<label class="input-group2-btn">
				<span class="btn btn-primary">
					セット２<input type="file" style="display:none" class="uploadFile">
				</span>
			</label>
			<input type="text" class="form-control" readonly=""><br>
			<input name="image2-detail" class="form-control" id="InputSet2" placeholder="セット２の説明を入力してください。"  value="<?php echo($item['image2-detail']);?>"></input>
		</div><br>

		<div class="input-group3">
			<label class="input-group3-btn">
				<span class="btn btn-primary">
					セット３<input type="file" style="display:none" class="uploadFile">
				</span>
			</label>
			<input type="text" class="form-control" readonly=""><br>
			<input name="image3-detail" class="form-control" id="InputSet1" placeholder="セット３の説明を入力してください。"  value="<?php echo($item['image3-detail']);?>"></input>
		</div><br>

		<input class="btn btn-default" type="submit" value="確認"><br>
</form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).on('change', ':file', function() {
    var input = $(this),
    numFiles = input.get(0).files ? input.get(0).files.length : 1,
    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.parent().parent().next(':text').val(label);
	});
</script>

</body>
</html>
