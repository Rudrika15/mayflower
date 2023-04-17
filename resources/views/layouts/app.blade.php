<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    {{-- Aos Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" class="bi bi-flower1" sizes="192x192" href="#">
    <title>MayFlower</title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('assets/styles/style.min.css') }}">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') }}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/waves/waves.min.css') }}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/sweet-alert/sweetalert.css') }}">

    <!-- Percent Circle -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/percircle/css/percircle.css') }}">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/chart/chartist/chartist.min.css') }}">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>

    <!-- Dark Themes -->
    <link rel="stylesheet" href="{{ asset('assets/styles/style-dark.min.css') }}">

    <!-- Bootstrap 5 cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>
    <div class="main-menu">
        <header class="header">
            <a href="#" class="logo">MayFlower <i class="bi bi-flower1 text-warning"></i></a>
            <button type="button" class="button-close fa fa-times js__menu_close"></button>
            <div class="user">
                <h5 class="name"><a href="/deshboard">{{ Auth::user()->name }}</a></h5>
                <!-- <h5 class="position">{{ Auth::user()->getRoleNames() }}</h5> -->
                <!-- /.name -->
                <div class="control-wrap js__drop_down">
                    <i class="fa fa-caret-dow js__drop_down_button"></i>
                    <div class="control-list">
                        <div class="control-item"><a href="#"><i class="fa fa-user"></i> Profile</a></div>
                        <div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
                        <div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Log out</a></div>
                    </div>
                    <!-- /.control-list -->
                </div>
                <!-- /.control-wrap -->
            </div>
            <!-- /.user -->
        </header>
        <!-- /.header -->
        <div class="content">

            <div class="navigation " style="bottom: 20px;">
                <!-- /.title -->

                @guest
                @else
                @if (Auth::user()->hasRole('Admin'))
                <ul class="menu js__accordion">
                    <li class="current">
                        <a class="waves-effect" href="/deshboard"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('booking.index') }}"><i class="menu-icon fa fa-book"></i><span>Bookings</span></a>
                    </li>
                    <li>
                        <!-- <a class="waves-effect"  href="{{ route('admin.master.index') }}"><i class="menu-icon fa fa-home"></i><span>Master</span></a> -->
                        <!-- <a class="waves-effect" href="{{ route('admin.testsuggetion.index') }}"><i class="menu-icon fa fa-home"></i><span>Testsuggetion</span></a> -->

                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.package.index') }}"><i class="fa fa-paper-plane-o menu-icon"></i><span>Packge</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.packagedetail.index') }}"><i class="menu-icon fa fa-deaf"></i><span>Packge Detail</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.test.index') }}"><i class="menu-icon fa fa-deaf"></i><span>Test Bundle</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.testdetail.index') }}"><i class="menu-icon fa fa-deaf"></i><span>Test Detail</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.testcenter.index') }}"><i class="menu-icon fa fa-map-marker"></i><span>Test center</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.doctormaster.index') }}"><i class="menu-icon fa fa-glass"></i><span>Doctor master</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.userpackage.index') }}"><i class="menu-icon fa fa-user"></i><span>User Package</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.userlabreport.index') }}"><i class="menu-icon fa fa-flask"></i><span>User Lab Reports</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.usertestcenter.index') }}"><i class="menu-icon fa fa-map-marker"></i><span>User Test Center</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.sampletype.index') }}"><i class="menu-icon fa fa-simplybuilt"></i><span>Sample Type</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.testtype.index') }}"><i class="menu-icon fa fa-file-text"></i><span>Test Type</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.aboutus.index') }}"><i class="menu-icon fa fa-life-ring"></i><span>About Us</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.blog.index') }}"><i class="menu-icon fa fa-rss"></i><span>Blog</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('admin.faq.index') }}"><i class="menu-icon fa fa-star"></i><span>FAQ</span></a>
                    </li>

                </ul>
                <!-- /.menu js__accordion -->
                <h5 class="title">Other</h5>
                <!-- /.title -->
                <ul class="menu js__accordion">
                    <li class="">
                        <!-- parent-item -->
                        <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-cog"></i><span>Settings</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content">
                            <li><a href="{{ route('users.index') }}">User Managment</a></li>
                            <li><a href="{{ route('roles.index') }}">Role Managment</a></li>
                            <li><a href="{{ route('permissions.index') }}">Permission Managment</a></li>

                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>
                </ul>
                @else
                @if (Auth::user()->hasRole('Doctor'))
                <ul class="menu js__accordion">
                    <li class="current">
                        <a class="waves-effect" href="/deshboard"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('doctor.userdoctorhistory.index') }}"><i class="menu-icon fa fa-history"></i><span>User Doctor History</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('doctor.usermedicinehistory.index') }}"><i class="menu-icon fa fa-medkit"></i><span>User Medicine History</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('doctor.doctormaster.profileedit') }}"><i class="menu-icon fa fa-user"></i><span>Doctor Profile</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('doctor.appointment.view') }}">
                            <i class="menu-icon fa fa-plus"></i><span>Appointment</span></a>
                    </li>
                </ul>
                @else
                @if (Auth::user()->hasRole('Patients'))
                <ul class="menu js__accordion">
                    <li class="current">
                        <a class="waves-effect" href="/deshboard"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                    </li>
                </ul>
                @endif
                @endif
                @endif
                @endguest
                <!-- /.menu js__accordion -->

                <!-- /.menu js__accordion -->
            </div>
            <!-- /.navigation -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.main-menu -->

    <div class="fixed-navbar">
        <div class="pull-left">
            <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
            <h1 class="page-title">@yield('nav')</h1>
            <!-- /.page-title -->
        </div>
        <!-- /.pull-left -->
        <div class="pull-right">
            <div class="ico-item">
                <a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
                <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
                <!-- /.searchform -->
            </div>
            <!-- /.ico-item -->
            <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
            <!-- /.ico-item fa fa-fa-arrows-alt -->

            <!-- /.ico-item -->
            <a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
            <a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
            <a class="ico-item fa fa-power-off js__logou" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            </a>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>


        </div>
        <!-- /.pull-right -->
    </div>
    <!-- /.fixed-navbar -->

    <div id="notification-popup" class="notice-popup js__toggle" data-space="75">
        <h2 class="popup-title">Your Notifications</h2>
        <!-- /.popup-title -->
        <div class="content">
            <ul class="notice-list">
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">John Doe</span>
                        <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                        <span class="time">10 min</span>
                    </a>
                </li>

            </ul>
            <!-- /.notice-list -->
            <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
        </div>
        <!-- /.content -->
    </div>
    <!-- /#notification-popup -->

    <div id="message-popup" class="notice-popup js__toggle" data-space="75">
        <h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
        <!-- /.popup-title -->
        <div class="content">
            <ul class="notice-list">
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">John Doe</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">10 min</span>
                    </a>
                </li>

            </ul>
            <!-- /.notice-list -->
            <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
        </div>
        <!-- /.content -->
    </div>
    <!-- /#message-popup -->
    <div id="wrapper">
        <div class="main-content">
            @yield('content')
            <!-- /.row -->

        </div>
        <!-- /.main-content -->
    </div>
    <!--/#wrapper -->
    <footer class="footer bottom-footer">
        <ul class="list-inline footers">
            <li>2023 © mayflower</li>

        </ul>
    </footer>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="assets/script/html5shiv.min.js"></script>
  <script src="assets/script/respond.min.js"></script>
 <![endif]-->
    <!--
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('assets/plugin/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/waves/waves.min.js') }}"></script>
    <!-- Full Screen Plugin -->
    <script src="{{ asset('assets/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>

    <!-- Percent Circle -->
    <script src="{{ asset('assets/plugin/percircle/js/percircle.js') }}"></script>

    <!-- Google Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js')}}"></script>

    <!-- Chartist Chart -->
    <script src="{{ asset('assets/plugin/chart/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/chart.chartist.init.min.js') }}"></script>

    <!-- FullCalendar -->
    <script src="{{ asset('assets/plugin/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/fullcalendar.init.js') }}"></script>


    <!-- Validator -->
    <script src="{{ asset('assets/plugin/validator/validator.min.js') }}"></script>

    <!-- main -->
    <script src="{{ asset('assets/scripts/main.min.js') }}"></script>

    {{-- aos animation --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>