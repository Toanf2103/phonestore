<!DOCTYPE html>
<html lang="en">
<head>
    <LINK REL="SHORTCUT ICON" HREF="{{asset('public/backend/img/logo-title.jpg')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TNT Admin | {{ $title ?? Dashboard }}</title>

    @include('admin.elements.header-libs')
    <!-- Google Font: Source Sans Pro -->

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Navbar -->
    @include("admin.elements.navbar")
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include("admin.elements.sidebar")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    @include("admin.elements.control-sidebar")
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include("admin.elements.footer")
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
    @include('admin.elements.footer-libs')
</body>
</html>
