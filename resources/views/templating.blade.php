<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GESTION CACAO| OLAM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href={{asset("AdminLTE-2.3.9/bootstrap/css/bootstrap.min.css")}}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href={{asset("AdminLTE-2.3.9/plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{asset("AdminLTE-2.3.9/dist/css/AdminLTE.min.css")}}>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href={{asset("AdminLTE-2.3.9/dist/css/skins/_all-skins.min.css")}}>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src={{asset("js/html5shiv.min.js")}}></script>
    <script src={{asset("public/js/respond.min.js")}}></script>

    <![endif]-->

    @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>C</b>IB</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Cacao</b>OLAM</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
       @include('Header.main_header')

    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        @include('SideBar.main_siderbar')
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Version 2.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            @include('SideBar.stat')
            <!-- /.row -->

            @yield('main_content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('Footer.main_footer')

    <!-- Control Sidebar -->
    @include('SideBar.control_siderbar')
<!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
@yield('js')
<!-- jQuery 2.2.3
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>-->
<script src={{asset("AdminLTE-2.3.9/plugins/jQuery/jquery-2.2.3.min.js")}}></script>
<!-- Bootstrap 3.3.6
<script src="bootstrap/js/bootstrap.min.js"></script>-->
<script src={{asset("AdminLTE-2.3.9/bootstrap/js/bootstrap.js")}}></script>
<!-- FastClick
<script src="plugins/fastclick/fastclick.js"></script>
<script src=""></script>-->
<script src={{asset("AdminLTE-2.3.9/plugins/fastclick/fastclick.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("AdminLTE-2.3.9/dist/js/app.min.js")}}></script>
<!-- Sparkline -->
<script src={{asset("AdminLTE-2.3.9/plugins/sparkline/jquery.sparkline.min.js")}}></script>
<!-- jvectormap -->
<script src={{asset("AdminLTE-2.3.9/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}></script>
<script src={{asset("AdminLTE-2.3.9/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}></script>
<!-- SlimScroll 1.3.0 -->
<script src={{asset("AdminLTE-2.3.9/plugins/slimScroll/jquery.slimscroll.min.js")}}></script>
<!-- ChartJS 1.0.1 -->
<script src={{asset("AdminLTE-2.3.9/plugins/chartjs/Chart.min.js")}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{asset("AdminLTE-2.3.9/dist/js/pages/dashboard2.js")}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{asset("AdminLTE-2.3.9/dist/js/demo.js")}}></script>
</body>
</html>
@yield('content_modal')