<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nippon Kuruma | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ URL::to('src/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ URL::to('src/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ URL::to('src/css/AdminLTE.min.css') }} ">

        <link rel="stylesheet" href="{{ URL::to('src/css/skins/_all-skins.min.css') }} ">


        <!-- DataTables -->
        <link rel="stylesheet" href="{{ URL::to('src/plugins/datatables/dataTables.bootstrap.css') }}">

    </head>


<body class="hold-transition skin-blue sidebar-mini">


         @yield('content')
 
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="{{ URL::to('src/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{ URL::to('src/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ URL::to('src/plugins/fastclick/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ URL::to('src/js/adminjs/app.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ URL::to('src/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
        <!-- jvectormap -->
        <script src="{{ URL::to('src/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ URL::to('src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="{{ URL::to('src/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="{{ URL::to('src/plugins/chartjs/Chart.min.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ URL::to('src/js/adminjs/pages/dashboard2.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ URL::to('src/js/adminjs/demo.js')}}"></script>



</body>
</html>
