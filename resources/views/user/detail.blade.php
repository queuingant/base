@extends('app.layouts.default')
@section('bodyer')
    <div class="ui container" style="margin-top:40px;">
        @include('app.shared._messages')
        @include('app.shared._errors')
        {{---------------------------------------------------------}}

        <div class="ui grid">
            <div class="four wide column">
                <div class="ui card red">
                    <div class="image">
                        <img src="{{ asset('') }}{{ Auth::user()->avator }}">
                    </div>
                    <div class="content">
                        <div class="header">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="meta">
                        <span class="date">
                            <i class="{{ Auth::user()->country }} flag"></i>
                            {{ Auth::user()->level }}
                        </span>
                        </div>
                        <div class="description">
                            {{ Auth::user()->email }}
                        </div>
                    </div>
                    <div class="extra content">
                  <span class="right floated">
                      {{date("Y-m-d",strtotime(Auth::user()->created_at))}}加入
                  </span>
                  <span>
                        <i class="chart bar outline icon"></i>
                        35 文章
                  </span>
                    </div>
                </div>
            </div>
            <div class="twelve wide column">
                {{--右上--}}
                <div class="ui placeholder segment">
                    <div class="ui two column stackable center aligned grid">
                        <div class="ui vertical divider">Or</div>
                        <div class="middle aligned row">
                            <div class="column">
                                <div class="ui icon header">
                                    <i class="search icon"></i>
                                    Find Country
                                </div>
                                <div class="field">
                                    <div class="ui search">
                                        <div class="ui icon input">
                                            <input class="prompt" type="text" placeholder="Search countries...">
                                            <i class="search icon"></i>
                                        </div>
                                        <div class="results"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui icon header">
                                    <i class="world icon"></i>
                                    Add New Country
                                </div>
                                <div class="ui primary button">
                                    Create
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--右下--}}
                <div class="ui three column stackable grid">
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui three column stackable grid">
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui three column stackable grid">
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui three column stackable grid">
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui raised segment">
                            <div class="ui placeholder">
                                <div class="image header">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="paragraph">
                                    <div class="medium line"></div>
                                    <div class="short line"></div>
                                </div>
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