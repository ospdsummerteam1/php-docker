@extends('layout.common')
@extends('layout.header')
@section('content')
    <div class="container">
        <div class="row">
            <h1>出品確認</h1>
            <?php echo csrf_field(); ?>
            <div class="main_image">
                <img src="{{"image/".$data['item']['img']}}"
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
                                <img src="{{"image/".$send['img']}}" class="img-rounded" hspace="3"
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

            <div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-fw fa-2x fa-twitter fa-fw"></i>
					</span>
                <a class="btn btn-lg btn-block btn-twitter" href="/answer/{{$data['item']['item_id']}}">解答する</a>
            </div>

        </div>
    </div>
@stop