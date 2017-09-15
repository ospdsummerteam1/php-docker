@extends('layout.common')
@extends('layout.header')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($data as $tmp)
                <div class="answer1 col-md-4">
                    <h3>{{'質問 : '.$tmp['question']}}</h3>
                    <p>{{"回答 : ".$tmp['answer']}}</p>
                </div>
            @endforeach
        </div>
        <div class="row">
            <form action="{{url('mypage/result')}}" method="get" class="col-md-6  text-center">
                <input type="hidden" name="not" value="{{$data[0]['application_id']}}">
                <input type="submit" value="断る" class="btn btn-lg btn-default ">
            </form>
            <form action="{{url('mypage/result')}}" method="get" class="col-md-6 text-center">
                <input type="hidden" name="yes" value="{{$data[0]['application_id']}}">
                <input type="submit" value="話す" class="btn btn-lg btn-primary">
            </form>
        </div>
    </div>
@stop
