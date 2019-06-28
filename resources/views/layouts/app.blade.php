<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}} | TU-RAC | Account</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.1.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">

    <!-- Theme style -->
    {{--
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.12/dist/css/coreui.min.css">

    <!-- Ionicons -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/coreui-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
     --}}

    <link rel="stylesheet" href="{{asset('css/icofont/icofont.min.css')}}">

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="icon" href="{{asset('img/stats-icon.png')}}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{asset('css/mainapp.css')}}">
    @yield('css')

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{!! route('dashboard') !!}">
        <img class="navbar-brand-full" src="{{asset('img/stats-icon.png')}}" width="30" height="30"
             alt="TURAC Logo">
        <img class="navbar-brand-minimized" src="{{asset('img/stats-icon.png')}}" width="30"
             height="30" alt="TURAC Logo">
        <span style="font-size: 10px; color: #333; font-weight: bold">ระบบสารสนเทศเพื่อบันทึกบัญชี<br>Dashboard</span>
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    {{-- header menu --}}
    <ul class="nav navbar-nav d-md-down-none menu">
        {{-- <li class="nav-item px-3">
        <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
        </li> --}}
        @include('layouts.menu')
    </ul>


    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#">
                <i class="icofont-alarm"></i>
                <span class="badge badge-pill badge-danger">5</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" style="margin-right: 10px" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="true" aria-expanded="false">
                {!! Auth::user()->name !!}
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-envelope-o"></i> Messages
                    <span class="badge badge-success">42</span>
                </a>
                <div class="dropdown-header text-center">
                    <strong>Settings</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-wrench"></i> Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-shield"></i> Lock Account</a>
                <a class="dropdown-item" href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i>Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    </ul>
</header>

<div class="app-body">
    @include('layouts.sidebar')
    <main class="main">
        @include('partials.message')
        @yield('content')
    </main>
</div>
<footer class="app-footer">
    <div>
        <a href="#">TURAC </a>
        <span>&copy; 2019 Account.</span>
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a style="color:#fff" href="https://coreui.io">IT Service & Consultant</a>
    </div>
</footer>
</body>
<!-- jQuery 3.1.1 -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    const url = '{!! url("/") !!}'
    $("body").removeClass("sidebar-lg-show");
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
{{-- <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.12/dist/js/coreui.min.js"></script>

@yield('scripts')
@stack('scripts')

</html>
