<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="{{asset('css/material-dashboard.css')}}" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
        @stack('style')
    </head>

    <body>
        <div id="app">
            <div class="wrapper ">

                <!-- Side Navbar -->
                @include('dashboard.inc.side_navbar')

                <div class="main-panel">
                    <!-- Navbar -->
                    @include('dashboard.inc.header')
                    <div class="content">
                        <div class="container-fluid">
                            <div class="breadcrumb-box">
                                <ul class="breadcrumb" style="background: #f9f9f9;">
                                    <li class="breadcrumb-item"><a href="{{ Route::current()->getName() != 'dashboard./' ? route('dashboard./') : '' }}">Dashboard</a></li>
                                    @yield('breadcrumbs')
                                </ul>
                            </div>
                            @include('layouts.message')
                            @yield('dashboard_content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--   Core JS Files   -->
        <script src="{{asset('js/core/jquery.min.js')}}"></script>
        <script src="{{asset('js/image.js')}}"></script>
        <script src="{{asset('js/core/popper.min.js')}}"></script>
        <script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
        <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
        <!-- Plugin for the momentJs  -->
        <script src="{{asset('js/plugins/moment.min.js')}}"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{asset('js/plugins/jquery.validate.min.js')}}"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{asset('js/plugins/jquery.bootstrap-wizard.js')}}"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{asset('js/plugins/bootstrap-selectpicker.js')}}"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{asset('js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{asset('js/plugins/bootstrap-tagsinput.js')}}"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{asset('js/plugins/jasny-bootstrap.min.js')}}"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{asset('js/plugins/fullcalendar.min.js')}}"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="{{asset('js/plugins/jquery-jvectormap.js')}}"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{asset('js/plugins/nouislider.min.js')}}"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{asset('js/plugins/arrive.min.js')}}"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chartist JS -->
        <script src="{{asset('js/plugins/chartist.min.js')}}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{asset('js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{asset('js/demo.js')}}"></script>
        @stack('scripts')
        <script>
            $(document).ready(function() {
                    $().ready(function(){

                    $('.alert').delay(1500);
                    $('.alert').hide(1000);
                });

                $(document).ready(function(){
                    $('.table').dataTable();
                })

                $().ready(function() {
                    $sidebar = $('.sidebar');

                    $sidebar_img_container = $sidebar.find('.sidebar-background');

                    $full_page = $('.full-page');

                    $sidebar_responsive = $('body > .navbar-collapse');

                    window_width = $(window).width();

                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                    if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                        if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                            $('.fixed-plugin .dropdown').addClass('open');
                        }

                    }


                    $('.switch-sidebar-mini input').change(function() {
                        $body = $('body');

                        $input = $(this);

                        if (md.misc.sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            md.misc.sidebar_mini_active = false;

                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                        } else {

                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                            setTimeout(function() {
                                $('body').addClass('sidebar-mini');

                                md.misc.sidebar_mini_active = true;
                            }, 300);
                        }

                        // we simulate the window Resize so the charts will get updated in realtime.
                        var simulateWindowResize = setInterval(function() {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);

                        // we stop the simulation of Window Resize after the animations are completed
                        setTimeout(function() {
                            clearInterval(simulateWindowResize);
                        }, 1000);

                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                md.initDashboardPageCharts();

            });
        </script>
    </body>
</html>

