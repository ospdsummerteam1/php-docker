@extends('layout.common')
@extends('layout.header')
@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            <form method="post" action="/answer/confirm">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Question1</label>
                    <h4>{{$questions[0]}}</h4>
                    <input type="text" name="answer1" class="form-control">
                </div>
                <div class="form-group">
                    <label>Question2</label>
                    <h4>{{$questions[1]}}</h4>
                    <input type="text" name="answer2" class="form-control">
                </div>
                <div class="form-group">
                    <label>Question3</label>
                    <h4>{{$questions[2]}}</h4>
                    <input type="text" name="answer3" class="form-control">
                </div>

                <div class="input-group">
                    <button class="btn btn-lg btn-block btn-conbutton" type="submit" value='send'>確認</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#myModal').on('show.bs.modal', function (e) {
        if (!data) return e.preventDefault() // stops modal from being shown
    })
</script>
@stop