@extends('app.layouts.default')
@section('bodyer')
    <div class="ui container" style="margin-top:40px;">
        @include('app.shared._messages')
        @include('app.shared._errors')
        {{-------------------------------------------------------------------------}}
        @foreach($users as $user)

            <i class="{{ $user->country }} flag"></i>

        @endforeach
        {{ $users->render() }}
        <div class="ui placeholder segment">
            <div class="ui icon header">
                <i class="pdf file outline icon"></i>
                No documents are listed for this customer.
            </div>
            <div class="ui primary button">Add Document</div>
        </div>

        <div class="ui placeholder segment">
            <div class="ui icon header">
                <i class="search icon"></i>
                We don't have any documents matching your query
            </div>
            <div class="inline">
                <div class="ui primary button">Clear Query</div>
                <div class="ui button">Add Document</div>
            </div>
        </div>

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

        <div class="ui segments">
            <div class="ui segment">
                <p>Top</p>
            </div>
            <div class="ui secondary segment">
                <p>Secondary Content</p>
            </div>
        </div>

        <div class="ui loading segment">
            <p></p>
            <p></p>
        </div>

        {{-------------------------------------------------------------------------}}
    </div>
@stop
@include('app.shared.sematic-common-js')