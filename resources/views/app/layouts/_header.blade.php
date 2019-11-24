<div class="ui menu">
    <div class="ui container">
        <a class="header item" href="{{ route('entrance') }}">
            <i class="home icon"></i>
            Base
        </a>
        {{--ZLS--}}
        <div class="ui dropdown item" tabindex="0">
            ZLS
            <i class="dropdown icon"></i>

            <div class="menu transition hidden" tabindex="-1">
                <a class="item" href="#">
                    <i class="venus mars icon"></i>
                    婚恋
                </a>
                <div class="item">
                    <i class="users icon"></i>
                    人口
                </div>
                <div class="item">
                    <i class="handshake outline icon"></i>
                    道法
                </div>
                <div class="item">
                    <i class="yen sign icon"></i>
                    价值
                </div>
                <div class="item">
                    <i class="game icon"></i>
                    游戏
                    <i class="caret right icon"></i>
                    <div class="menu transition">
                        <a class="item">神武3</a>
                        <a class="item">九州劫</a>
                        <a class="item">梦想世界</a>
                    </div>
                </div>
            </div>
        </div>
        {{--OS--}}
        <div class="ui dropdown item" tabindex="0">
            OS
            <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item">
                    <i class="building outline icon"></i>
                    房产
                </a>
                <a class="item">
                    <i class="venus mars icon"></i>
                    婚配
                </a>
                <div class="item">
                    <i class="game icon"></i>
                    游戏
                    <i class="caret right icon"></i>
                    <div class="menu transition">
                        <a class="item">神武3</a>
                        <a class="item">九州劫</a>
                        <a class="item">梦想世界</a>
                    </div>
                </div>
            </div>
        </div>
        {{--GZC--}}
        <div class="ui dropdown item" tabindex="0">
            GZC
            <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item">
                    经济
                </a>
                <a class="item">
                    军事
                </a>
                <a class="item">
                    互联网
                </a>
                <div class="item">
                    <i class="user icon"></i>
                    人类
                    <i class="caret right icon"></i>
                    <div class="menu transition">
                        <a class="item">黄种人</a>
                        <a class="item">白种人</a>
                        <a class="item">黑种人</a>
                    </div>
                </div>
            </div>
        </div>
        {{-----------------------------------------------------------------------------------------}}
        <div class="right menu">
            <div class="item">
                <div class="ui action left icon input">
                    <i class="search icon"></i>
                    <input type="text" placeholder="文章，动态，用户">
                    <div class="ui animated button" tabindex="0">
                        <div class="visible content">搜索</div>
                        <div class="hidden content">
                            <i class="right arrow icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            @if(Auth::check())
                <div class="ui dropdown item" tabindex="0">
                    <img class="ui avatar image" src="{{ asset('') }}{{ Auth::user()->avator }}">
                    {{ Auth::user()->name }}
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item" href="{{ route('detail') }}">
                            <i class="address card icon"></i>
                            我的主页
                        </a>
                        <a class="item" href="{{ route('personalCenter') }}">
                            <i class="street view icon"></i>
                            个人中心
                        </a>
                        <a href="" class="item">
                            <i class="settings icon"></i>
                            编辑资料
                        </a>
                        <form method="post" action="{{ route('logout') }}" id="logoutForm">
                            {{ csrf_field() }}
                            <a class="item" onclick="document.getElementById('logoutForm').submit();">
                                <i class="icon sign out"></i>
                                退出
                            </a>
                        </form>
                    </div>
                </div>
                @else
                <a class="item" href="{{ route('login') }}">
                    <i class="sign in alternate icon"></i>
                    登录
                </a>
                <a class="ui item" href="{{ route('register') }}">
                    <i class="user plus icon"></i>
                    注册
                </a>
            @endif

        </div>
    </div>
</div>