@extends('app.layouts.default')
@section('bodyer')
    <div class="ui container" style="margin-top:40px;">
        @include('app.shared._messages')
        @include('app.shared._errors')
{{---------------------------------------------------------}}
        <div class="ui grid">
            <div class="twelve wide column">
                <div class="ui card fluid" style="padding: 30px;">
                    <form class="ui form" method="post" action="{{ route('createUser') }}">
                        {{ csrf_field() }}
                        <h4 class="ui dividing header green">
                            <i class="edit icon"></i>
                            请填写以下信息</h4>
                        <div class="field">
                            <label>电子邮件</label>
                            <div class="two fields">
                                <div class="field">
                                    <input type="text" name="email" placeholder="电子邮件" value="{{ old('email') }}">
                                </div>
                                <div class="field">
                                    <input type="text" name="name" placeholder="姓名" value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label>密码</label>
                            <div class="two fields required">
                                <div class="field">
                                    <input type="password" name="password" placeholder="密码">
                                </div>
                                <div class="field">
                                    <input type="password" name="password_confirmation" placeholder="重复密码">
                                </div>
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label>人生阶段</label>
                                <select class="ui fluid dropdown" name="level">
                                    <option value="">大致阶段</option>
                                    <option value="small">小学</option>
                                    <option value="middle">初中</option>
                                    <option value="high">高中</option>
                                </select>
                            </div>
                            <div class="field">
                                <label>国家</label>
                                <div class="ui fluid search selection dropdown">
                                    <input type="hidden" name="country">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">国家</div>
                                    <div class="menu">
                                        <div class="item" data-value="cn"><i class="cn flag"></i>中华人民共和国</div>
                                        <div class="item" data-value="au"><i class="au flag"></i>澳大利亚</div>
                                        <div class="item" data-value="ca"><i class="ca flag"></i>加拿大</div>
                                        <div class="item" data-value="fr"><i class="fr flag"></i>法国</div>
                                        <div class="item" data-value="de"><i class="de flag"></i>德国</div>
                                        <div class="item" data-value="in"><i class="in flag"></i>印度</div>
                                        <div class="item" data-value="it"><i class="it flag"></i>意大利</div>
                                        <div class="item" data-value="kp"><i class="kp flag"></i>朝鲜</div>
                                        <div class="item" data-value="ru"><i class="ru flag"></i>俄罗斯</div>
                                        <div class="item" data-value="sg"><i class="sg flag"></i>新加坡</div>
                                        <div class="item" data-value="za"><i class="za flag"></i>南非</div>
                                        <div class="item" data-value="kr"><i class="kr flag"></i>韩国</div>
                                        <div class="item" data-value="tw"><i class="tw flag"></i>中国台湾</div>
                                        <div class="item" data-value="us"><i class="us flag"></i>美国</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label>选择一个头像</label>
                            <div class="ui fluid selection dropdown">
                                <input type="hidden" name="avator">
                                <i class="dropdown icon"></i>
                                <div class="default text">头像</div>
                                <div class="menu">
                                    <div class="item" data-value="1">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/1.jpg') }}">
                                        1
                                    </div>
                                    <div class="item" data-value="2">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/2.jpg') }}">
                                        2
                                    </div>
                                    <div class="item" data-value="3">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/3.jpg') }}">
                                        3
                                    </div>
                                    <div class="item" data-value="4">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/4.jpg') }}">
                                        4
                                    </div>
                                    <div class="item" data-value="5">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/5.jpg') }}">
                                        5
                                    </div>
                                    <div class="item" data-value="6">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/6.jpg') }}">
                                        6
                                    </div>
                                    <div class="item" data-value="7">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/7.jpg') }}">
                                        7
                                    </div>
                                    <div class="item" data-value="8">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/8.jpg') }}">
                                        8
                                    </div>
                                    <div class="item" data-value="9">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/9.jpg') }}">
                                        9
                                    </div>
                                    <div class="item" data-value="10">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/10.jpg') }}">
                                        10
                                    </div>
                                    <div class="item" data-value="11">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/11.jpg') }}">
                                        11
                                    </div>
                                    <div class="item" data-value="12">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/12.jpg') }}">
                                        12
                                    </div>
                                    <div class="item" data-value="13">
                                        <img class="ui mini avatar image" src="{{ asset('f/system_avator/13.jpg') }}">
                                        13
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui buttons" style="float: right">
                            <a class="ui red button" href="{{ route('entrance') }}">
                                <i class="close icon"></i>
                                取消注册
                            </a>
                            <div class="or"></div>
                            <button class="ui positive button" type="submit">
                                <i class="check icon"></i>
                                确认注册
                            </button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="four wide column">
                <div class="ui card">
                    <div class="ui placeholder segment green">
                        <div class="ui icon header">
                            <i class="users icon"></i>
                            注册成为Home的一员
                        </div>
                        <div class="ui animated vertical button fluid basic positive" tabindex="0">
                            <div class="visible content">
                                <i class="check icon"></i>
                                已有账号？
                            </div>
                            <div class="hidden content" onclick="location='{{ route('login') }}'">
                                <i class="sign in alternate icon"></i>
                                去登录
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