<!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/html2/health-coach/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Mar 2018 10:49:07 GMT -->
<head>
    <meta charset="utf-8">
    <title>NutriApple | Homepage</title>
    <!-- Stylesheets -->
    <link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/revolution-slider.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('front/images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('front/images/favicon.ico')}}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    <link rel="stylesheet" href="front/css/custom.css">

</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    {{--<div class="preloader"></div>--}}

    <!-- Main Header-->
    <header class="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">

                    <!--Top Left-->
                    <div class="top-left pull-left">
                        <ul>
                            <li><span class="styled-font">Have any question? </span></li>
                            <li><span class="fa fa-phone"></span> Phone +123-456-7890</li>
                            <li><span class="fa fa-envelope-o"></span> Mail@HealthCoach.com</li>
                            <li><span class="fa fa-globe"></span> Apple St, New York, NY 10012, USA</li>
                        </ul>
                    </div>

                    <!--Top Right-->
                    <div class="top-right pull-right">
                        <a href="{{url('/contact')}}"  class="theme-btn">Make an Appointment</a>
                    </div>

                </div>

            </div>
        </div><!-- Header Top End -->


        <!-- Main Box -->
        <div class="main-box">
            <div class="auto-container">
                <div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="{{ asset('front/images/2.png')}}" alt=""></a></div>
                    </div>

                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{url('/')}}">Home</a></li>
                                    <li class="current"><a href="{{url('/about')}}">About Us</a>
                                        <ul>
                                            {{--<li><a href="{{url('/about')}}">About Us</a></li>--}}
                                            {{--<li><a href="events.html">Events</a></li>--}}
                                        </ul>
                                    </li>
                                    <li class="current"><a href="{{url('/services')}}">Services</a>
                                        {{--<ul>--}}
                                            {{--<li><a href="{{url('/services')}}">Our Services</a></li>--}}
                                            {{--<li><a href="service-single.html">Nutrition Strategies</a></li>--}}
                                            {{--<li><a href="service-single.html">Workout Routines</a></li>--}}
                                            {{--<li><a href="service-single.html">Support &amp; Motivation</a></li>--}}
                                            {{--<li><a href="service-single.html">Balance Body Mind</a></li>--}}
                                            {{--<li><a href="service-single.html">Physical Activity</a></li>--}}
                                            {{--<li><a href="service-single.html">Fitness &amp; Performance</a></li>--}}
                                        {{--</ul>--}}
                                    </li>

                                    <li class="current"><a href="{{url('/blog')}}">Blog</a>
                                        {{--<ul>--}}
                                            {{--<li><a href="blog.html">Blog Classic</a></li>--}}
                                            {{--<li><a href="blog-list.html">Blog List View</a></li>--}}
                                            {{--<li><a href="{{url('/blog')}}">Blog Grid View</a></li>--}}
                                            {{--<li><a href="blog-single.html">Blog Single</a></li>--}}
                                        {{--</ul>--}}
                                    </li>

                                    {{--<li class="dropdown"><a href="#">Shop</a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="shop.html">Shop Products</a></li>--}}
                                            {{--<li><a href="shop-single.html">Shop Single</a></li>--}}
                                            {{--<li><a href="shopping-cart.html">Shopping Cart</a></li>--}}
                                            {{--<li><a href="register.html">Login / Register</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}

                                    <li class="current"><a href="{{url('/contact')}}">Contact</a></li>

                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                    </div><!--Nav Outer End-->

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                        <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->

                    <!--Cart Btn-->


                </div>
            </div>
        </div>

    </header>
    <!--End Main Header -->


    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">

        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>

        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">

            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.html"><img src="images/logo-2.png" alt=""></a>
            </div><!-- /.logo -->

            <!-- .Side-menu -->
            <div class="side-menu">
                <!-- .navigation -->
                <ul class="navigation">
                    <li class="current"><a href="index.html">Home</a></li>
                    <li class="dropdown"><a href="#">About Us</a>
                        <ul>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="events.html">Events</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Services</a>
                        <ul>
                            <li><a href="services.html">Our Services</a></li>
                            <li><a href="service-single.html">Nutrition Strategies</a></li>
                            <li><a href="service-single.html">Workout Routines</a></li>
                            <li><a href="service-single.html">Support &amp; Motivation</a></li>
                            <li><a href="service-single.html">Balance Body Mind</a></li>
                            <li><a href="service-single.html">Physical Activity</a></li>
                            <li><a href="service-single.html">Fitness &amp; Performance</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Gallery</a>
                        <ul>
                            <li><a href="portfolio-four-column.html">Gallery Four Column</a></li>
                            <li><a href="portfolio-fullwidth.html">Gallery Fullwidth</a></li>
                            <li><a href="portfolio-with-text.html">Gallery With Text</a></li>
                            <li><a href="portfolio-single.html">Gallery Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog Classic</a></li>
                            <li><a href="blog-list.html">Blog List View</a></li>
                            <li><a href="blog-grid.html">Blog Grid View</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#">Shop</a>
                        <ul>
                            <li><a href="shop.html">Shop Products</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="register.html">Login / Register</a></li>
                        </ul>
                    </li>

                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div><!-- /.Side-menu -->

            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>

        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->