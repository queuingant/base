@extends('app.layouts.default')
@section('style')
    <style>
        blockquote{
            background:linear-gradient(90deg, #43cea2 0%,#185a9d 100% );
            margin-left: 0;
            margin-right: 0;
            padding: 20px;
            font-size: 20px;
            border-radius:10px
        }
        p{
            font-size: 20px;
        }
        table
        {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        table td, table th
        {
            border: 1px solid #cad9ea;
            color: #666;
            height: 30px;
        }
        table thead th
        {
            background-color: #CCE8EB;
            width: 100px;
        }
        table tr:nth-child(odd)
        {
            background: #fff;
        }
        table tr:nth-child(even)
        {
            background: #F5FAFA;
        }
    </style>
@stop
@section('bodyer')
    <div class="ui container" style="margin-top:40px;">
        @include('app.shared._messages')
        @include('app.shared._errors')
        {{---------------------------------------------------------}}

        <div class="ui grid">

            <div class="twelve wide column">

                <div class="ui raised segment">
                    {{--标题-----------------------------------------}}
                    <a class="ui teal ribbon label">
                        <i class="book icon"></i>
                        {{ $article->title }}
                    </a>
                    <p></p>
                    {{--发表时间-----------------------------------------}}
                    <a class="ui olive ribbon label">
                        <i class="clock icon"></i>
                        {{ $article->created_at->diffForHumans() }}
                    </a>
                    <p></p>
                    <h4 class="ui horizontal divider header">
                        <i class="tag icon"></i>
                        文章概述
                    </h4>
                    <p>
                        该篇文章讲述了葫芦娃舅爷爷的故事
                    </p>
                    {{---相关信息-----------------------------------------}}
                    <h4 class="ui horizontal divider header">
                        <i class="bar chart icon"></i>
                        相关信息
                    </h4>
                    <table class="ui definition table">
                        <tbody>
                        <tr>
                            <td class="two wide column">
                                <i class="user icon"></i>
                                作者
                            </td>
                            <td>
                                {{ $article->user->name }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="calendar alternate outline icon"></i>
                                日期
                            </td>
                            <td>
                                {{ $article->created_at }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="tags icon"></i>
                                标签
                            </td>
                            <td>
                                <a class="ui tiny tag orange label">Orange</a>
                                <a class="ui tiny tag yellow label">Yellow</a>
                                <a class="ui tiny tag olive label">Olive</a>
                                <a class="ui tiny tag green label">Green</a>
                                <a class="ui tiny tag teal label">Teal</a>
                                <a class="ui tiny tag blue label">Blue</a>
                                <a class="ui tiny tag violet label">Violet</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    {{--文章内容-------------------------------------------------}}
                    <p>
                        {{--内容输出--}}
                        {!! Parsedown::instance()->text($article->content) !!}
                    </p>

                </div>

            </div>

            <div class="four wide column">

                <div class="ui card raised fluid">
                    <div class="content re">
                        <img class="right floated mini ui image" src="{{ asset('') }}{{ $article->user->avator }}">
                        <div class="header">
                            {{ $article->user->name }}
                        </div>
                        <div class="meta">
                            <i class="{{ $article->user->country }} flag"></i>
                        </div>
                        <div class="description">
                            Jenny wants to add you to the group <b>best friends</b>
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="ui two buttons">
                            <div class="ui basic green button">
                                <i class="add icon"></i>
                                关注
                            </div>
                            <div class="ui basic red button">
                                <i class="check icon"></i>
                                私信
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