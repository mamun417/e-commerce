<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', config('app.name')) | {{ config('app.name', 'Laravel blog') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">

    @stack('extra-links')
</head>

<body>

<div class="super_container">
    @include('components.header')
    @yield('content')
    @include('components.footer')
</div>

<script src="{{ asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('frontend/styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('frontend/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{ asset('frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{ asset('frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{ asset('frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{ asset('frontend/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('frontend/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{ asset('frontend/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('backend/js/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('frontend/js/axois.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js')}}"></script>
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
