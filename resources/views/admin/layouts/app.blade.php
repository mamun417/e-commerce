<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('panel/assets/images/favicon.png') }}" sizes="192x192"/>
    <link rel="apple-touch-icon" href="{{ asset('backend/img/favicon.png') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name')) | {{ config('app.name', 'Laravel blog') }}</title>

    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/js/extra-plugin/tokenize2/tokenize2.min.css') }}" rel="stylesheet">
    <link href="{{asset('backend/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/custom_style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">

    @stack('extra-links')

</head>
<body class="fixed-sidebar">

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
<script src="{{ asset('backend/js/inspinia.js') }}"></script>
<script src="{{ asset('backend/js/plugins/pace/pace.min.js')}}"></script>
<script src="{{ asset('backend/js/plugins/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/fullcalendar/moment.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('backend/js/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('backend/js/extra-plugin/tokenize2/tokenize2.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/summernote/summernote.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@stack('extra-scripts')

<script>

    /*summernote*/
    $(document).ready(function () {
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

    //show confirm message when delete table row
    function deleteRow(rowId) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this item!",
            type: "warning",
            showCancelButton: true,
            allowOutsideClick: true,
            confirmButtonColor: "#1ab394",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: true
        }, function () {
            document.getElementById('row-delete-form' + rowId).submit();
        });
    }

    // change publication status
    function changeStatus(e) {

        let id = $(e).attr('id'),
            route = $(e).attr('route')

        axios.get(route + '/' + id)
            .then(function (response) {
                let statusBtn = $(e).find('span');

                if ($(statusBtn).hasClass('badge-primary')) {
                    $(statusBtn).removeClass('badge-primary').addClass('badge-warning')
                    $(statusBtn).find('strong').html('Disable')
                } else {
                    $(statusBtn).removeClass('badge-warning').addClass('badge-primary')
                    $(statusBtn).find('strong').html('Active')
                }

                toastr.success('Status has been updated successful.');
            })
            .catch(function (error) {
                toastr.error('Status could not be update.');
            })
    }
</script>

@yield('custom-js')

</body>
</html>
