<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS</title>


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="material/image/png" sizes="16x16" href="material/assets/images/favicon.png">
        <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
        <!-- Bootstrap Core CSS -->
        <link href="material/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="material/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="material/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
        <link href="material/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <!--This page css - Morris CSS -->
        <link href="material/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="material/css/style.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="material/css/colors/green.css" id="theme" rel="stylesheet">
        <link href="material/css/icons/font-awesome/css/font-awesome.css" id="theme" rel="stylesheet">

    
    </head>
    

</head>
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
    <!-- NavBar -->
    @include('layout/navbar')
    

    <!-- Side Bar -->
    @include('layout/aside')

    <div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>

        </div>

       @yield('content')


    </div>

    <!-- Footer -->
    @include('layout/footer')

    </div>

    </div>

    <script src="{{ asset("material/assets/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('material/assets/plugins/popper/popper.min.js')}}"></script>
    <script src="material/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="material/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="material/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="material/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="material/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="material/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="material/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="material/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="material/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="material/assets/plugins/d3/d3.min.js"></script>
    <script src="material/assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="material/js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="material/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>
</html>