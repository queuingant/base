@section('js')
    {{--鼠标移至标签上弹出--}}
    <script>
        $('.ui.dropdown').dropdown({
            on : 'hover'
        });
    </script>
    {{--alert信息的可删除--}}
    <script>
        $('.message .close')
                .on('click', function() {
                    $(this)
                            .closest('.message')
                            .transition('fade')
                    ;
                })
        ;
    </script>
    {{--checkbox的选择--}}
    <script>
        $('.checkbox').checkbox()
    </script>
@stop