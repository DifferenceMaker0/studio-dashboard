<!DOCTYPE html>
<html lang="en" style="height: auto;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SPA Client</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style --><!-- Use Version 6.9 For Customized Implementation -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css?v=6.9">  
  <!-- Full Calendar --><!-- Used With CustomCode, MomentJS, FullCalendarJS -->
  <link rel="stylesheet" href="/plugins/fullcalendar/main.css">
  <!-- overlayScrollbars --><!-- Used With Theme Fixed -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="/plugins/dropzone/min/dropzone.min.css">
  <!-- Ionicons --><!-- Used With Widgets -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 

          <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
   
<style>  

</style>

</head>
<body class="sidebar-mini layout-navbar-fixed layout-fixed" style="height: auto;"> 

<div class="wrapper" id="top">
<!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>  -->

    <x-navbar/>
    <x-sidebar/>

    <!-- Content Wrapper. Contains page content -->
    <main class="content-wrapper">
      @include('includes.messages')
      @yield('content') 
    
    </main>
    <!-- /.content-wrapper --> 

      <x-control-sidebar/>  
      <x-footer /> 
</div>  

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script> 
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script> 
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script> 
<!-- fullCalendar 2.2.5 -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/fullcalendar/main.js"></script> 
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 
  
</body></html>