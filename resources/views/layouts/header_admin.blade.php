<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASA TECHNOVASINDO</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form action="/logout" method="POST" class="nav-link">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">
                            <i class="fa fa-door-open fa-fw"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/assets/img/user.png" class="img-circle elevation-2 mt-2" alt="User Image">
                    </div>
                    <div class="info">
                        <span class="d-block text-white">{{ auth()->user()->fullname }}</span>
                        <span class="text-white small">{{ ucwords(auth()->user()->role) }}</span>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-header text-uppercase">Manajemen Akun</li>
                        @foreach ($routes2 as $key => $value)
                            @if (isset($value[2]))
                                @php
                                    if ($value[2] != auth()->user()->role) {
                                        continue;
                                    }
                                @endphp
                            @endif
                            <li class="nav-item">
                                <a href="{{ $value[0] }}"
                                    class="nav-link @if (request()->is(substr($value[0], 1)) || request()->is(substr($value[0], 1) . '/*')) active @endif">
                                    <i class="nav-icon {{ $value[1] }}"></i>
                                    <p>
                                        {{ $key }}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                        <li class="nav-header text-uppercase">Manajemen Website</li>
                        @foreach ($routes as $key => $value)
                            <li class="nav-item">
                                <a href="{{ $value[0] }}"
                                    class="nav-link @if (request()->is(substr($value[0], 1)) || request()->is(substr($value[0], 1) . '/*')) active @endif">
                                    <i class="nav-icon {{ $value[1] }}"></i>
                                    <p>
                                        {{ $key }}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper mt-5 pt-4">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 font-weight-bold text-uppercase text-primary">@yield('title')</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
