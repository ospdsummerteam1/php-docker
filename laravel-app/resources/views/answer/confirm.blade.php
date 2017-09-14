@extends('layout.common')
@extends('layout.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="container text-center">
                <div class="form-group">
                    <label>Question1</label>
                    <h4>{{$questions[0]}}</h4>
                    <p>{{$answers["answer0"]}}</p>
                </div>
                <div class="form-group">
                    <label>Question2</label>
                    <h4>{{$questions[1]}}</h4>
                    <p>{{$answers["answer1"]}}</p>
                </div>
                <div class="form-group">
                    <label>Question3</label>
                    <h4>{{$questions[2]}}</h4>
                    <p>{{$answers["answer2"]}}</p>
                </div>

                <div class="form_conf" style="display:inline-flex">
                    <form method="post" action="/answer/end">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-submit btn-default" name="button" value="submit">送信
                        </button>
                    </form>
                    <form method="post" action="/answer/">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-edit btn-default" name="button" value="edit">編集</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#myModal').on('show.bs.modal', function (e) {
            if (!data) return e.preventDefault() // stops modal from being shown
        })
    </script>
@stop