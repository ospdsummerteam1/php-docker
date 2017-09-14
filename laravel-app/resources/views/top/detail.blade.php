@extends('layout.common')
@extends('layout.header')
@section('content')
    <div class="container">
        <div class="row">
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
        </div>
    </div>
@stop