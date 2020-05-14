<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- JQVMap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </ul>

        <!-- Right navbar links -->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{asset('image/hapo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset(Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image" style="width: 50px; height: 50px; float: left; border-radius: 50%;margin-right: 25px;"/>
                </div>
                <div class="info">
                    <a href="" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user-alt"></i>
                            <p>
                                Members
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="{{route('members.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Member all</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="{{route('members.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Member add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Customers
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="{{route('customers.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Customer all</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="{{route('customers.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Customer add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Projects
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="{{route('projects.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project all</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="{{route('projects.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Tasks
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="{{route('tasks.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Task all</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="{{route('tasks.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Task add</p>
                                </a>
                            </li>
                        </ul>
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
        <div class="content-header">
            <div class="container-fluid">
                <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
                @yield('contents')
            </div><!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.4
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.datepicker-here').datepicker();
    });
</script>
</body>
</html>
