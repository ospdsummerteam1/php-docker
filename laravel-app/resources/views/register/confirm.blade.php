@extends('layout.common')
@extends('layout.header')
@section('content')
    <div class="container">
        <div class="row">
            <h1>出品確認</h1>
            <?php echo csrf_field(); ?>
            <div class="main_image">
                <div class="col-md-4">
                    <img src="{{'../image/'.$item['main_image']}}"
                         align="left" class="img-rounded" hspace="3" width="320" height="240">
                </div>
                <div class="col-md-8">
                    <label for="OutputTitle">
                        <h1>{{$item["title"]}}</h1>
                        <br>
                        <h3>{{$item["detail"]}}</h3>

                    </label>
                </div>
            </div>
            <br clear="left">

            <div class="sub_image">
                <table class="table" border="0">
                    <tr class="tr">
                        <h2>継承セット一覧</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <img src="{{'../image/'.$item['image1']}}" class="img-rounded center-block"
                                             hspace="3"
                                             width="240" height="160">
                                        <p class="set">
                                            <label for="OutputSet">セット<br>
                                        <p>{{$item["image1-detail"]}}</p>
                                    </div>
                                    </td>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <img src="{{'../image/'.$item['image2']}}" class="img-rounded center-block"
                                             hspace="3"
                                             width="240" height="160">
                                        <p class="set">
                                            <label for="OutputSet">セット<br>
                                        <p>{{$item["image2-detail"]}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <img src="{{'../image/'.$item['image3']}}" class="img-rounded center-block"
                                             hspace="3"
                                             width="240" height="160">
                                        <p class="set">
                                            <label for="OutputSet">セット<br>
                                        <p>{{$item["image3-detail"]}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                </table>
            </div>
            <div class="quesion1">
                <label for="question1">質問１<br>
                    <label for="Outputquestion1">
                        <p>
                            {{$item["question1"]}}

                        </p><br>
                    </label>
                </label>
            </div>
            <br>

            <div class="quesion2">
                <label for="question2">質問２<br>
                    <label for="Outputquestion2">
                        <p>
                            {{$item["question2"]}}

                        </p><br>
                    </label>
                </label>
            </div>
            <br>

            <div class="quesion3">
                <label for="question3">質問３<br>
                    <label for="Outputquestion3">
                        <p>
                            {{$item["question3"]}}

                        </p><br>
                    </label>
                </label>
            </div>
            <br>

            <div class="form_conf" style="display:inline-flex">
                <form method="post" action="/register/end">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-submit btn-default" name="button" value="submit">登録
                    </button>
                </form>
                <form method="get" action="/register/">
                    <button type="submit" class="btn btn-edit btn-default">編集</button>
                </form>
            </div>
        </div>
    </div>
@stop
