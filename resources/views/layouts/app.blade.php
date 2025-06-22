<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Pelabuhan' }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">

    @stack('css')
    <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
    <script src="/notif/dist/js/iziToast.min.js" type="text/javascript"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-red navbar-light" style="box-shadow: 0px 1px 10px silver;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> --}}
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->


        <aside class="main-sidebar sidebar-light-danger elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="/logo/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                <span class="brand-text font-weight-light">

                    {{Auth::user()->name}}

                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        @guest

                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fa fa-user-lock"></i>
                                <p>
                                    SIGN IN
                                </p>
                            </a>
                        </li>
                        @endguest

                        @if (Auth::user()->roles == 'superadmin')

                        <li class="nav-item">
                            <a href="/superadmin" class="nav-link {{request()->is('superadmin') ? 'active':''}}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/user"
                                class="nav-link {{request()->is('superadmin/user*') ? 'active':''}}">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>
                                    Admin
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/kota"
                                class="nav-link {{request()->is('superadmin/kota*') ? 'active':''}}">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>
                                    Kota
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/kapal"
                                class="nav-link {{request()->is('superadmin/kapal*') ? 'active':''}}">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>
                                    Kapal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/jalur"
                                class="nav-link {{request()->is('superadmin/jalur*') ? 'active':''}}">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>
                                    Jalur
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/pemesanan"
                                class="nav-link {{request()->is('superadmin/pemesanan*') ? 'active':''}}">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>
                                    Pemesanan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/booking"
                                class="nav-link {{request()->is('superadmin/booking*') ? 'active':''}}">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>
                                    Booking
                                </p>
                            </a>
                        </li>
                        @else

                        @endif

                        <li class="nav-item">
                            <a href="/logout" class="nav-link" onclick="return confirm('Yakin ingin keluar?');">
                                <i class="nav-icon fas fa-arrow-right"></i>
                                <p>
                                    Keluar
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <br />

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">

        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/dist/js/adminlte.min.js"></script>

    @stack('js')
    <script>
        function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
    </script>
    <script type="text/javascript">
        @include('layouts.notif')
    </script>
</body>

</html>