<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
        content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>@yield('title','ADMIN')</title>
    <link rel="apple-touch-icon" href={{ asset('images/ico/apple-icon-120.png') }}>
    <link rel="shortcut icon" type="image/x-icon" href={{ asset('images/ico/favicon.ico') }}>
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('css/vendors.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/css/charts/chartist.css') }}>
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('css/app-lite.css') }}>
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('css/core/menu/menu-types/vertical-menu.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/core/colors/palette-gradient.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/pages/dashboard-ecommerce.css') }}>
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>
                        <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide"
                                data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                            <ul class="dropdown-menu">
                                <li class="arrow_box">
                                    <form>
                                        <div class="input-group search-box">
                                            <div class="position-relative has-icon-right full-width">
                                                <input class="form-control" id="search" type="text"
                                                    placeholder="Search here...">
                                                <div class="form-control-position navbar-search-close"><i
                                                        class="ft-x"> </i></div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">

                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><i
                                            class="ft-book"></i> Read Mail</a><a class="dropdown-item"
                                        href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item"
                                        href="#"><i class="ft-check-square"></i> Mark all Read </a></div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="avatar avatar-online"><img
                                        src="theme-assets/images/portrait/small/avatar-s-19.png"
                                        alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span
                                            class="avatar avatar-online"><img
                                                src="theme-assets/images/portrait/small/avatar-s-19.png"
                                                alt="avatar"><span class="user-name text-bold-700 ml-1">John
                                                Doe</span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                            class="ft-user"></i> Edit Profile</a><a class="dropdown-item"
                                        href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item"
                                        href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item"
                                        href="#"><i class="ft-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                            class="ft-power"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
        data-img="theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
                        <h3 class="brand-text">ADMIN</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active"><a href="index.html"><i class="ft-home"></i><span
                            class="menu-title" data-i18n="">Movie</span></a>
                </li>
                <li class=" nav-item"><a href="charts.html"><i class="ft-pie-chart"></i><span
                            class="menu-title" data-i18n="">Charts</span></a>
                </li>
                <li class=" nav-item"><a href="icons.html"><i class="ft-droplet"></i><span
                            class="menu-title" data-i18n="">Icons</span></a>
                </li>
                <li class=" nav-item"><a href="cards.html"><i class="ft-layers"></i><span
                            class="menu-title" data-i18n="">Cards</span></a>
                </li>
                <li class=" nav-item"><a href="buttons.html"><i class="ft-box"></i><span
                            class="menu-title" data-i18n="">Buttons</span></a>
                </li>
                <li class=" nav-item"><a href="typography.html"><i class="ft-bold"></i><span
                            class="menu-title" data-i18n="">Typography</span></a>
                </li>
                <li class=" nav-item"><a href="tables.html"><i class="ft-credit-card"></i><span
                            class="menu-title" data-i18n="">Tables</span></a>
                </li>
                <li class=" nav-item"><a href="form-elements.html"><i class="ft-layout"></i><span
                            class="menu-title" data-i18n="">Form Elements</span></a>
                </li>
                <li class=" nav-item"><a
                        href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i
                            class="ft-book"></i><span class="menu-title"
                            data-i18n="">Documentation</span></a>
                </li>
            </ul>
        </div>
        <div class="navigation-background"></div>
    </div>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="row"></div>
            <div class="row match-height" style="margin-top: 50px">

                @yield('content')

                {{-- <h1>hujkashdfijkn</h1> --}}

            </div>
            <!--/ Statistics -->
        </div>
    </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                class="float-md-left d-block d-md-inline-block">2018 &copy; Copyright <a
                    class="text-bold-800 grey darken-2" href="https://themeselection.com"
                    target="_blank">ThemeSelection</a></span>
            <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
                <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/"
                        target="_blank"> More themes</a></li>
                <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support"
                        target="_blank"> Support</a></li>
                <li class="list-inline-item"><a class="my-1"
                        href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/"
                        target="_blank"> Purchase</a></li>
            </ul>
        </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src={{ asset('vendors/js/vendors.min.js') }} type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src={{ asset('vendors/js/charts/chartist.min.js') }} type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src={{ asset('js/core/app-menu-lite.js') }}type="text/javascript"></script>
    <script src={{ asset('js/core/app-lite.js') }} type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src={{ asset('js/scripts/pages/dashboard-lite.js') }} type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
</body>

</html>
