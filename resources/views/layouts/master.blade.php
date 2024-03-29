{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Google Font: Source Sans Pro -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">--}}
{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">--}}
{{--    <!-- Ionicons -->--}}
{{--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
{{--    <!-- Tempusdominus Bootstrap 4 -->--}}
{{--    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">--}}
{{--    <!-- iCheck -->--}}
{{--    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">--}}
{{--    <!-- JQVMap -->--}}
{{--    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">--}}
{{--    <!-- Theme style -->--}}
{{--    <link rel="stylesheet" href="dist/css/adminlte.min.css">--}}
{{--    <!-- overlayScrollbars -->--}}
{{--    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">--}}
{{--    <!-- Daterange picker -->--}}
{{--    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">--}}
{{--    <!-- summernote -->--}}
{{--    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">--}}
{{--</head>--}}
{{--<body class="hold-transition sidebar-mini layout-fixed">--}}
{{--    <div class="wrapper">--}}

{{--        <!-- Preloader -->--}}
{{--        <div class="preloader flex-column justify-content-center align-items-center">--}}
{{--            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">--}}
{{--        </div>--}}

{{--        <!-- Navbar -->--}}
{{--        <nav class="main-header navbar navbar-expand navbar-white navbar-light">--}}
{{--            <!-- Left navbar links -->--}}
{{--            <ul class="navbar-nav">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item d-none d-sm-inline-block">--}}
{{--                    <a href="/home" class="nav-link">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item d-none d-sm-inline-block">--}}
{{--                    <a href="#" class="nav-link">Contact</a>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--            <!-- Right navbar links -->--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                    </li>--}}
{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                         document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">--}}
{{--                        <i class="fas fa-expand-arrows-alt"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">--}}
{{--                        <i class="fas fa-th-large"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--        <!-- /.navbar -->--}}

{{--        <!-- Main Sidebar Container -->--}}
{{--        <aside class="main-sidebar sidebar-dark-primary elevation-4">--}}
{{--            <!-- Brand Logo -->--}}
{{--            <a href="/home" class="brand-link">--}}
{{--                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
{{--                <span class="brand-text font-weight-light">Dental Quevedo</span>--}}
{{--            </a>--}}

{{--            <!-- Sidebar -->--}}
{{--            <div class="sidebar">--}}

{{--                <!-- Sidebar Menu -->--}}
{{--                <nav class="mt-2">--}}
{{--                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">--}}
{{--                        <!-- Add icons to the links using the .nav-icon class--}}
{{--                             with font-awesome or any other icon font library -->--}}
{{--                        <li class="nav-header">INICIO</li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="/home" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-chart-area"></i>--}}
{{--                                <p>Dashboard</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-tree"></i>--}}
{{--                                <p>--}}
{{--                                    UI Elements--}}
{{--                                    <i class="fas fa-angle-left right"></i>--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                            <ul class="nav nav-treeview">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/UI/general.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>General</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/UI/icons.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Icons</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/UI/buttons.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Buttons</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/UI/sliders.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Sliders</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/UI/modals.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Modals & Alerts</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/UI/navbar.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Navbar & Tabs</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/UI/timeline.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Timeline</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/UI/ribbons.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Ribbons</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-header">GESTIÓN DEL CONSULTORIO</li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="/pacientes" class="nav-link">--}}
{{--                                <i class="nav-icon fa fa-users"></i>--}}
{{--                                <p>Pacientes</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-header">LABELS</li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="nav-icon far fa-circle text-danger"></i>--}}
{{--                                <p class="text">Important</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="nav-icon far fa-circle text-warning"></i>--}}
{{--                                <p>Warning</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="nav-icon far fa-circle text-info"></i>--}}
{{--                                <p>Informational</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--                <!-- /.sidebar-menu -->--}}
{{--            </div>--}}
{{--            <!-- /.sidebar -->--}}
{{--        </aside>--}}

{{--        <!-- Content Wrapper. Contains page content -->--}}
{{--        <div class="content-wrapper">--}}
{{--            <div class="p-3">--}}
{{--                @yield('content_header')--}}
{{--                @yield('content')--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- /.content-wrapper -->--}}
{{--        <footer class="main-footer">--}}
{{--            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>--}}
{{--            All rights reserved.--}}
{{--            <div class="float-right d-none d-sm-inline-block">--}}
{{--                <b>Version</b> 3.1.0--}}
{{--            </div>--}}
{{--        </footer>--}}

{{--        <!-- Control Sidebar -->--}}
{{--        <aside class="control-sidebar control-sidebar-dark">--}}
{{--            <!-- Control sidebar content goes here -->--}}
{{--        </aside>--}}
{{--        <!-- /.control-sidebar -->--}}
{{--    </div>--}}
{{--<!-- ./wrapper -->--}}

{{--<!-- jQuery -->--}}
{{--<script src="plugins/jquery/jquery.min.js"></script>--}}
{{--<!-- jQuery UI 1.11.4 -->--}}
{{--<script src="plugins/jquery-ui/jquery-ui.min.js"></script>--}}
{{--<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->--}}
{{--<script>--}}
{{--    $.widget.bridge('uibutton', $.ui.button)--}}
{{--</script>--}}
{{--<!-- Bootstrap 4 -->--}}
{{--<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<!-- ChartJS -->--}}
{{--<script src="plugins/chart.js/Chart.min.js"></script>--}}
{{--<!-- Sparkline -->--}}
{{--<script src="plugins/sparklines/sparkline.js"></script>--}}
{{--<!-- JQVMap -->--}}
{{--<script src="plugins/jqvmap/jquery.vmap.min.js"></script>--}}
{{--<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>--}}
{{--<!-- jQuery Knob Chart -->--}}
{{--<script src="plugins/jquery-knob/jquery.knob.min.js"></script>--}}
{{--<!-- daterangepicker -->--}}
{{--<script src="plugins/moment/moment.min.js"></script>--}}
{{--<script src="plugins/daterangepicker/daterangepicker.js"></script>--}}
{{--<!-- Tempusdominus Bootstrap 4 -->--}}
{{--<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>--}}
{{--<!-- Summernote -->--}}
{{--<script src="plugins/summernote/summernote-bs4.min.js"></script>--}}
{{--<!-- overlayScrollbars -->--}}
{{--<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="dist/js/adminlte.js"></script>--}}
{{--<!-- AdminLTE for demo purposes -->--}}
{{--<script src="dist/js/demo.js"></script>--}}
{{--<!-- AdminLTE dashboard demo (This is only for demo purposes) -->--}}
{{--<script src="dist/js/pages/dashboard.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
