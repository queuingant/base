@extends('app.layouts.default')
@section('simpleMDE')
    <link href="https://cdn.bootcss.com/simplemde/1.11.2/simplemde.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/simplemde/1.11.2/simplemde.min.js"></script>
@stop
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
        <div class="ui card fluid" style="padding: 20px;">
            <form method="post" id="articleCreate" action="{{ route('articleCreate') }}">
                {{ csrf_field() }}
                <div class="ui form">
                    <div class="field">
                        <label>文章标题</label>
                        <input type="text" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="field">
                        <label>文章内容</label>
                        <textarea name="content" id="editor">{{ old('content') }}</textarea>
                    </div>
                </div>
                <script>
                    var simplemde = new SimpleMDE({
                        toolbar:[
                            "bold","italic","strikethrough","|",
                            "heading-1","heading-2","heading-3","heading-bigger","heading-smaller","|",
                            "quote","link","horizontal-rule","|",
                            "unordered-list","ordered-list","table","image","|",
                            "preview","side-by-side","fullscreen","guide"
                        ],
                        element: document.getElementById("editor"),
                        placeholder: "请使用markdown格式书写",
                        autofocus:true,
                        autosave: {
                            enabled: true,
                            uniqueId: "65as6d546a5d465as4",
                            delay: 1000,
                        },
                    });
                </script>
                <button class="ui button  inverted green right floated">
                    <i class="check icon"></i>
                    提交
                </button>
            </form>
        </div>
        {{---------------------------------------------------------}}
    </div>
@stop
@include('app.shared.sematic-common-js')