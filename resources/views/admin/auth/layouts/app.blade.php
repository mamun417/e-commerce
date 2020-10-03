<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('backend/img/favicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('backend/img/favicon.png') }}" />
    <title>Admin Easy Learning</title>
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

    {{--Social icon--}}
    <link href="{{ asset('backend/css/plugins/bootstrapSocial/bootstrap-social.css') }}" rel="stylesheet">

    @stack('extra-css')

    <style>
        body{
            color: black;
        }
        .ibox-content{
            border-style: none;
            box-shadow: 1px 0 20px rgba(0,0,0,.08);
        }
    </style>

</head>
<body class="gray-bg">
    <div class="loginColumns animated fadeInDown">
        <div class="row">
            @yield('content')
        </div>
    </div>
</body>

<script src="{{ asset('backend/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

<!-- iCheck -->
<script src="{{ asset('backend/js/plugins/iCheck/icheck.min.js') }}"></script>

@yield('custom-js')

<script>
    $(document).ready(function () {
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

</html>
