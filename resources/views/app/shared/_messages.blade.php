@foreach (['red','green'] as $msg)
    @if(session()->has($msg))
        <div class="ui {{ $msg }} message transition">
            <i class="close icon"></i>
            {{--<div class="header">
                {{ session()->get($msg) }}
            </div>--}}
            {{ session()->get($msg) }}
        </div>
    @endif
@endforeach
