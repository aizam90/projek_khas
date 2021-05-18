<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}"> --}}

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/css/white-custom.css') }}">

    <!-- data tables css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/dataTables.bootstrap4.min.css') }}">

    {{-- custom style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/myStyle.css') }}">

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

</head>
<body class="minimenu">

    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    @include('layouts.include_admin.mobile_header')

    @include('layouts.include_admin.sidebar')

    {{-- paparan nama dan logout --}}
    @include('layouts.include_admin.navbar')




    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">PROJEK KHAS</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">{{ $title ?? '' }}</li>
                                @if( !empty($subTitle) )
                                    <li class="breadcrumb-item">{{ $subTitle }}</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    @include('layouts.errors.alert')
                    @yield('content')
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->




<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/plugins/clipboard.min.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/uikit.min.js') }}"></script> -->


<!-- data tables css -->
<script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/data-basic-custom.js') }}"></script>

@yield('jquery')

<script>
$(document).ready( function(){
    $('.myDataTable').DataTable({
        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            }
        ],
        "order": [[ 0, "desc" ]],
        "language": {
            "search": "Carian",
            "lengthMenu": "Paparan _MENU_ rekod",
            "zeroRecords": "Rekod tidak dijumpai",
            "info": "Paparan _PAGE_ dari _PAGES_",
            "infoEmpty": "Tiada rekod pada masa ini",
            "infoFiltered": "",
            "paginate": {
                "first":      "Mula",
                "last":       "Akhir",
                "next":       "Seterusnya",
                "previous":   "Sebelum"
            }
        }
    });
} );
</script>

</body>

</html>
