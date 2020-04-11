<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  
  
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->


    <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.min.css') }}">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/square/blue.css') }}">

    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/datepicker3.css') }}">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker-bs3.css') }}">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  </head>
  
  
  
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
        @include('backend.admin.includes.header')
        @include('backend.admin.includes.sidebar')
            @yield('content')
            @include('backend.admin.includes.control-sidebar')
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->




    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script type="text/javascript">
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

    {{-- <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script> --}}

    <!-- Sparkline -->
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- jvectormap -->
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
   
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('assets/plugins/knob/jquery.knob.js') }}"></script>

    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>

    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    
    <!-- datepicker -->
    <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

    <!-- Slimscroll -->
    <script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>

    <!-- FastClick -->
    <script src="{{ asset('assets/plugins/fastclick/fastclick.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
  </body>
</html>
