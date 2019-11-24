@extends('app.layouts.default')
@section('bodyer')
    <div class="ui container" style="margin-top:40px;">
        @include('app.shared._messages')
        @include('app.shared._errors')
        {{---------------------------------------------------------}}
        <div class="ui grid">
            <div class="twelve wide column">
                <div class="ui card fluid" style="padding: 30px;">
                    <form class="ui form" method="post" action="{{ route('userLogin') }}">
                        {{ csrf_field() }}
                        <h4 class="ui dividing header teal">
                            <i class="sign in alternate icon"></i>
                            填写账号密码
                        </h4>
                        <div class="field">
                            <label>电子邮件</label>
                            <div class="field">
                                <input type="text" name="email" placeholder="电子邮件" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="field">
                            <label>密码</label>
                            <div class="field">
                                <input type="password" name="password" placeholder="密码">
                            </div>
                        </div>
                        <div class="ui buttons" style="float: right">
                            <a class="ui red button" href="{{ route('entrance') }}">
                                <i class="power off icon"></i>
                                取消
                            </a>
                            <div class="or"></div>
                            <button class="ui positive button" type="submit">
                                <i class="street view icon"></i>
                                登录
                            </button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="four wide column">
                <div class="ui card">
                    <div class="ui placeholder segment teal">
                        <div class="ui icon header">
                            <i class="users icon"></i>
                            登录以使用Home的所有功能
                        </div>
                        <div class="ui animated vertical button fluid basic teal" tabindex="0">
                            <div class="visible content">
                                <i class="user times icon"></i>
                                还没账号？
                            </div>
                            <div class="hidden content" onclick="location='{{ route('register') }}'">
                                <i class="user plus icon"></i>
                                去注册
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{---------------------------------------------------------}}
    </div>
@stop
@include('app.shared.sematic-common-js')