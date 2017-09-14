@extends('layout.common')
@extends('layout.header')
@section('content')
    <div class="container">
        <div class="row">
            <h1>出品確認</h1>
            <?php echo csrf_field(); ?>
            <div class="main_image">
                <div class="col-md-4">
                    <img src="{{"image/".$data['item']['img']}}"
                         align="left" class="img-rounded" hspace="3" width="320" height="240">
                </div>
                <div class="col-md-8">
                    <label for="OutputTitle">
                        <h1> <?=(isset($data['item']['title'])) ? $data['item']['title'] : null?></h1>
                        <br>
                        <h3><?=(isset($data['item']['detail'])) ? $data['item']['detail'] : null?></h3>

                    </label>
                </div>
            </div>
            <br clear="left">

            <div class="sub_image">
                <table class="table" border="0">
                    <tr class="tr">
                        <h2>継承セット一覧</h2>
                        <div class="row">
                            @foreach($data['send_item'] as $send)
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <img src="{{'image/'.$send['img']}}" class="img-rounded center-block"
                                                 hspace="3"
                                                 width="240" height="160">
                                            <p class="set">
                                                <label for="OutputSet">セット<br>
                                            <p>{{$send['detail']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
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

            <div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-fw fa-2x fa-twitter fa-fw"></i>
                <a class="btn btn-lg btn-block btn-twitter" href="/answer/{{$data['item']['item_id']}}">解答する</a>
                    </span>
            </div>
        </div>
    </div>
@stop