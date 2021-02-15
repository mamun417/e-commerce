<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', config('app.name')) | {{ config('app.name', 'Laravel blog') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/frontend/style.css') }}">

    @stack('extra-links')
</head>

<body>

<div class="super_container">
    @include('components.header')
    @yield('content')
    @include('components.footer')
</div>

<script src="{{ asset('js/frontend/app.js')}}"></script>

@yield('script')

<script>
    $(function () {
        @foreach(['success', 'warning', 'error', 'info'] as $item)
            @if(session($item))
                toastr['{{ $item }}']('{{ session($item) }}');
            @endif
        @endforeach
    });
</script>

</body>

</html>
