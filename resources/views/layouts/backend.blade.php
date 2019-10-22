<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Durrs Constructions' )</title>

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />
     <!-- datatables.net core CSS     -->
  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('backend/css/material-dashboard-rtl.css') }}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('backend/css/material-dashboard.css') }}" rel="stylesheet" />
     <link type="text/css" href="{{asset('frontend/css/message.css')}}" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{asset('css/message.css')}}">
   
    @stack('css')
</head>
<body>
<div id="app">
    <div class="wrapper">
        @if(Request::is('admin*'))
            @include('backend.partial.sidebar')
        @endif
        <div class="main-panel">
            @if(Request::is('admin*'))
                @include('backend.partial.topbar')
            @endif
                @yield('content')
            @if(Request::is('admin*'))
                @include('backend.partial.footer')
            @endif
        </div>
    </div>
</div>

    <!-- Scripts -->
    <!--   Core JS Files   -->
    <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/material.min.js') }}" type="text/javascript"></script>


    
    <!--  Charts Plugin -->
    <script src="{{ asset('backend/js/plugins/chartist.min.js') }}"></script>
    <!--  Dynamic Elements plugin -->
    <script src="{{ asset('backend/js/plugins/arrive.min.js') }}"></script>
    <!--  PerfectScrollbar Library -->
    <script src="{{ asset('backend/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('backend/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="{{ asset('backend/js/material-dashboard.js') }}"></script>

    <!--  Datatable Plugin -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
     <!--  fade notification -->
    <script src="{{asset('js/message.js')}}"></script>
    @stack('scripts')
</body>
</html>
