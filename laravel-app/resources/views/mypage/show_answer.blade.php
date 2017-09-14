@extends('layout.common')
@extends('layout.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="modal fade" id="sampleModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                        </div>
                        <br>
                        <div class="modal-body">
                            <div class="quesion1">
                                <p align="left">質問１.あああああああああああああああ</p>
                                <p align="left">いいいいいいいいいいいいいいいいい（回答１）</p>
                            </div>
                            <br>
                            <div class="answer2">
                                <p align="left">質問２.あああああああああああああああ</p>
                                <p align="left">いいいいいいいいいいいいいいいいい（回答２）</p>
                            </div>
                            <br>
                            <div class="answer2">
                                <p align="left">質問３.あああああああああああああああ</p>
                                <p align="left">いいいいいいいいいいいいいいいいい（回答３）</p>
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default">断る</button>
                            <button type="button" class="btn btn-primary">話す</button>
                        </div>
                    </div>
                </div>
            </div>
@stop
