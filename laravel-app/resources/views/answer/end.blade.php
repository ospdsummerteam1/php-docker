@extends('layout.common')
@extends('layout.header')
@section('content')
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar"
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

            <div class="modal fade" id="sampleModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                        </div>
                        <br>
                        <div class="modal-body">
                            送信しました。
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="lead">送信しました</p>
                    </div>
                </div>
            </div>

            <div class="input-group">
                <a class="btn btn-lg btn-block btn-conbutton" href="/mypage">確認!!</a>
            </div>
        </div>
    </div>
    <script>
        $('#myModal').on('show.bs.modal', function (e) {
            if (!data) return e.preventDefault() // stops modal from being shown
        })
    </script>
@stop