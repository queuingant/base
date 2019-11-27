@extends('app.layouts.default')
@section('bodyer')
    <div class="ui container" style="margin-top:40px;">
        @include('app.shared._messages')
        @include('app.shared._errors')
        {{---------------------------------------------------------}}
        <table class="ui celled striped table">
            <thead>
                <tr>
                    <th colspan="">
                        序号
                    </th>
                    <th colspan="">
                        作者
                    </th>
                    <th colspan="">
                        标题
                    </th>
                    <th colspan="">
                        发表时间
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>
                            <i class="calendar outline icon"></i>
                            {{ $article->id }}
                        </td>
                        <td>
                            {{ $article->user->name }}
                        </td>
                        <td>
                            <a href="{{ route('articleDetail',$article->id) }}">
                                {{ $article->title }}
                            </a>
                        </td>
                        <td>
                            {{ $article->created_at }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $articles->render() }}
        {{---------------------------------------------------------}}
    </div>
@stop
@include('app.shared.sematic-common-js')