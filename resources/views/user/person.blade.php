@extends('app.layouts.default')
@section('bodyer')
    <div class="ui container" style="margin-top:40px;">
        @include('app.shared._messages')
        @include('app.shared._errors')
        {{---------------------------------------------------------}}




        <div class="ui grid">
            <div class="four wide column">
                <div class="ui vertical menu fluid">
                    <a class="item">
                        <i class="address card outline icon"></i>
                        个人信息
                    </a>
                    <a class="item">
                        <i class="database icon"></i>
                        数据和个性化
                    </a>
                    <a class="item">
                        <i class="lock icon"></i>
                        安全性
                    </a>
                    <a class="item">
                        <i class="users icon"></i>
                        团体
                    </a>
                </div>

            </div>
            <div class="twelve wide column">

                <div class="ui card fluid">
                        <div class="content">
                            <div class="header">Elliot Fu</div>
                            <div class="description">
                                Elliot Fu is a film-maker from New York.
                            </div>
                        </div>
                        <a class="ui bottom button big" href="#">
                            <i class="add icon"></i>
                            开始使用
                        </a>
                </div>

                <div class="ui card fluid">
                    <div class="content">
                        <div class="header">Elliot Fu</div>
                        <div class="description">
                            Elliot Fu is a film-maker from New York.
                        </div>
                    </div>
                    <a class="ui bottom button big" href="#">
                        <i class="add icon"></i>
                        开始使用
                    </a>
                </div>

                <div class="ui card fluid">
                    <div class="content">
                        <div class="header">Elliot Fu</div>
                        <div class="description">
                            Elliot Fu is a film-maker from New York.
                        </div>
                    </div>
                    <a class="ui bottom button big" href="#">
                        <i class="add icon"></i>
                        开始使用
                    </a>
                </div>

                <div class="ui card fluid">
                    <div class="content">
                        <div class="header">Elliot Fu</div>
                        <div class="description">
                            Elliot Fu is a film-maker from New York.
                        </div>
                    </div>
                    <a class="ui bottom button big" href="#">
                        <i class="add icon"></i>
                        开始使用
                    </a>
                </div>

            </div>
        </div>





        {{---------------------------------------------------------}}
    </div>
@stop
@include('app.shared.sematic-common-js')