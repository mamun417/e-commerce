<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('panel/assets/images/favicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('backend/img/favicon.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Easy Learning</title>

    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/iCheck/custom.css')}}" rel="stylesheet">

    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('backend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    {{--sweet alert--}}
    <link href="{{ asset('backend/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

    {{--Tokenize2--}}
    <link href="{{ asset('backend/js/extra-plugin/tokenize2/tokenize2.min.css') }}" rel="stylesheet">

    {{--Editor --}}
    <link href="{{asset('backend/css/animate.css')}}" rel="stylesheet">

    {{--custom style--}}
    <link href="{{ asset('backend/css/custom_style.css') }}" rel="stylesheet">

    <!--time circle-->
    <link href="{{ asset('backend/js/plugins/time-circles/TimeCircles.css') }}" rel="stylesheet">

    @stack('extra-links')

</head>
<body>

<div id="wrapper">
    @include('admin.element.sidebar')
</div>

<div id="page-wrapper" class="gray-bg">

    @include('admin.element.header')

    @yield('content')

    @include('admin.element.footer')

</div>

<script src="{{ asset('backend/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('backend/js/inspinia.js') }}"></script>
<script src="{{ asset('backend/js/plugins/pace/pace.min.js')}}"></script>

<!-- iCheck -->
<script src="{{ asset('backend/js/plugins/iCheck/icheck.min.js') }}"></script>

<!-- Date range use moment.js same as full calendar plugin -->
<script src="{{ asset('backend/js/plugins/fullcalendar/moment.min.js') }}"></script>

<!-- Date range picker -->
<script src="{{ asset('backend/js/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- Toastr -->
<script src="{{ asset('backend/js/plugins/toastr/toastr.min.js') }}"></script>

{{--Sweetalert--}}
<script src="{{ asset('backend/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

{{--Tokenize2--}}
<script src="{{ asset('backend/js/extra-plugin/tokenize2/tokenize2.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('backend/js/plugins/time-circles/TimeCircles.js') }}"></script>

{{--Editor--}}
<script src="{{ asset('backend/js/plugins/summernote/summernote.min.js')}}"></script>

<script>

    /*summernote*/
    $(document).ready(function(){
        $('.summernote').summernote();

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });

    $(function () {
        @foreach(['success', 'warning', 'error', 'info'] as $item)
            @if(session($item))
                toastr['{{ $item }}']('{{ session($item) }}');
            @endif
        @endforeach
    });
</script>

@yield('custom-js')

</body>
</html>
