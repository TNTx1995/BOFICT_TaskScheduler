<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('layouts.partials._head')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
      .select2-container {
    width: 100% !important;
    padding: 0;
}
    </style>
 </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('sweetalert::alert')
    @include('layouts.partials._navbar')
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('layouts.partials._sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="app">
   
    {{-- @include('flash::message') --}}
     @yield('content')
    
  </div>
  <!-- /.content-wrapper -->

 

  <!-- Main Footer -->
  @include('layouts.jquery._addEmployee')
  @include('layouts.jquery._addTask')
  @include('layouts.jquery._addNotice')
  
  @include('layouts.partials._footer')
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
  
  @include('layouts.partials._footer-script')
   
</body>
</html>
