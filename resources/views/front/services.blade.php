@extends('front.master')
@section('content')

    <section class="page-title" style="background-image:url(front/images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Services</h1>
            <h3 class="styled-font">We Offer healthier lifestyle.</h3>
        </div>
    </section>

    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="breadcrumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Our Services</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Featured Servies Section-->
    <section class="featured-services">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Featured Service -->
                @foreach($services as $service)
                <div class="featured-service col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="service-single.html"><img src="{{ asset('image/service-photo/'.$service->image)}}"alt=""></a></figure>
                            <div class="caption-box">
                                <div class="icon"><span class="{{$service->icon}}"></span></div>
                                <h4 class="title"><a href="service-single.html">{{$service->title}}</a></h4>
                            </div>
                            <!--Overlay-->
                            <div class="overlay-box">
                                <div class="icon-box"><span class="{{$service->icon}}"></span></div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h4 class="title"><a href="service-single.html">{{$service->title}}</a></h4>
                                        <div class="text">
                                            {{$service->description}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

                <!--Featured Service -->
                {{--<div class="featured-service col-md-4 col-sm-6 col-xs-12">--}}
                    {{--<div class="inner-box">--}}
                        {{--<div class="image-box">--}}
                            {{--<figure class="image"><a href="service-single.html"><img src="{{ asset('front/images/resource/featured-image-2.jpg')}}" alt=""></a></figure>--}}
                            {{--<div class="caption-box">--}}
                                {{--<div class="icon"><span class="flaticon-fitness-shoes"></span></div>--}}
                                {{--<h4 class="title"><a href="service-single.html">Workout Routines</a></h4>--}}
                            {{--</div>--}}
                            {{--<!--Overlay-->--}}
                            {{--<div class="overlay-box">--}}
                                {{--<div class="icon-box"><span class="flaticon-fitness-shoes"></span></div>--}}
                                {{--<div class="overlay-inner">--}}
                                    {{--<div class="overlay-content">--}}
                                        {{--<h4 class="title"><a href="service-single.html">Workout Routines</a></h4>--}}
                                        {{--<div class="text">Finding a workout is as easy as scrolling down, picking out the session that matches your goals, andgetting your butt to the gym!</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!--Featured Service -->--}}
                {{--<div class="featured-service col-md-4 col-sm-6 col-xs-12">--}}
                    {{--<div class="inner-box">--}}
                        {{--<div class="image-box">--}}
                            {{--<figure class="image"><a href="service-single.html"><img src=" {{ asset('front/images/resource/featured-image-3.jpg') }}" alt=""></a></figure>--}}
                            {{--<div class="caption-box">--}}
                                {{--<div class="icon"><span class="flaticon-exercising-man"></span></div>--}}
                                {{--<h4 class="title"><a href="service-single.html">Support &amp; Motivation</a></h4>--}}
                            {{--</div>--}}
                            {{--<!--Overlay-->--}}
                            {{--<div class="overlay-box">--}}
                                {{--<div class="icon-box"><span class="flaticon-exercising-man"></span></div>--}}
                                {{--<div class="overlay-inner">--}}
                                    {{--<div class="overlay-content">--}}
                                        {{--<h4 class="title"><a href="service-single.html">Support &amp; Motivation</a></h4>--}}
                                        {{--<div class="text">Finding a workout is as easy as scrolling down, picking out the session that matches your goals, andgetting your butt to the gym!</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!--Featured Service -->--}}
                {{--<div class="featured-service col-md-4 col-sm-6 col-xs-12">--}}
                    {{--<div class="inner-box">--}}
                        {{--<div class="image-box">--}}
                            {{--<figure class="image"><a href="service-single.html"><img src="{{ asset('front/images/resource/featured-image-10.jpg') }}" alt=""></a></figure>--}}
                            {{--<div class="caption-box">--}}
                                {{--<div class="icon"><span class="flaticon-brain"></span></div>--}}
                                {{--<h4 class="title"><a href="service-single.html">Balance Body Mind</a></h4>--}}
                            {{--</div>--}}
                            {{--<!--Overlay-->--}}
                            {{--<div class="overlay-box">--}}
                                {{--<div class="icon-box"><span class="flaticon-brain"></span></div>--}}
                                {{--<div class="overlay-inner">--}}
                                    {{--<div class="overlay-content">--}}
                                        {{--<h4 class="title"><a href="service-single.html">Balance Body Mind</a></h4>--}}
                                        {{--<div class="text">Finding a workout is as easy as scrolling down, picking out the session that matches your goals, andgetting your butt to the gym!</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!--Featured Service -->--}}
                {{--<div class="featured-service col-md-4 col-sm-6 col-xs-12">--}}
                    {{--<div class="inner-box">--}}
                        {{--<div class="image-box">--}}
                            {{--<figure class="image"><a href="service-single.html"><img src="{{ asset('front/images/resource/featured-image-11.jpg')}}" alt=""></a></figure>--}}
                            {{--<div class="caption-box">--}}
                                {{--<div class="icon"><span class="flaticon-bicycle-rider"></span></div>--}}
                                {{--<h4 class="title"><a href="service-single.html">Physical Activity</a></h4>--}}
                            {{--</div>--}}
                            {{--<!--Overlay-->--}}
                            {{--<div class="overlay-box">--}}
                                {{--<div class="icon-box"><span class="flaticon-bicycle-rider"></span></div>--}}
                                {{--<div class="overlay-inner">--}}
                                    {{--<div class="overlay-content">--}}
                                        {{--<h4 class="title"><a href="service-single.html">Physical Activity</a></h4>--}}
                                        {{--<div class="text">Finding a workout is as easy as scrolling down, picking out the session that matches your goals, andgetting your butt to the gym!</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!--Featured Service -->--}}
                {{--<div class="featured-service col-md-4 col-sm-6 col-xs-12">--}}
                    {{--<div class="inner-box">--}}
                        {{--<div class="image-box">--}}
                            {{--<figure class="image"><a href="service-single.html"><img src="{{ asset('front/images/resource/featured-image-12.jpg')}}" alt=""></a></figure>--}}
                            {{--<div class="caption-box">--}}
                                {{--<div class="icon"><span class="flaticon-dumbbell"></span></div>--}}
                                {{--<h4 class="title"><a href="service-single.html">Fitness &amp; Performance</a></h4>--}}
                            {{--</div>--}}
                            {{--<!--Overlay-->--}}
                            {{--<div class="overlay-box">--}}
                                {{--<div class="icon-box"><span class="flaticon-dumbbell"></span></div>--}}
                                {{--<div class="overlay-inner">--}}
                                    {{--<div class="overlay-content">--}}
                                        {{--<h4 class="title"><a href="service-single.html">Fitness &amp; Performance</a></h4>--}}
                                        {{--<div class="text">Finding a workout is as easy as scrolling down, picking out the session that matches your goals, andgetting your butt to the gym!</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!--Featured Service -->--}}
                {{--<div class="featured-service col-md-4 col-sm-6 col-xs-12">--}}
                    {{--<div class="inner-box">--}}
                        {{--<div class="image-box">--}}
                            {{--<figure class="image"><a href="service-single.html"><img src="images/resource/featured-image-13.jpg" alt=""></a></figure>--}}
                            {{--<div class="caption-box">--}}
                                {{--<div class="icon"><span class="flaticon-excercising-man"></span></div>--}}
                                {{--<h4 class="title"><a href="service-single.html">Exercise Program</a></h4>--}}
                            {{--</div>--}}
                            {{--<!--Overlay-->--}}
                            {{--<div class="overlay-box">--}}
                                {{--<div class="icon-box"><span class="flaticon-excercising-man"></span></div>--}}
                                {{--<div class="overlay-inner">--}}
                                    {{--<div class="overlay-content">--}}
                                        {{--<h4 class="title"><a href="service-single.html">Exercise Program</a></h4>--}}
                                        {{--<div class="text">Finding a workout is as easy as scrolling down, picking out the session that matches your goals, andgetting your butt to the gym!</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!--Featured Service -->--}}
                {{--<div class="featured-service col-md-4 col-sm-6 col-xs-12">--}}
                    {{--<div class="inner-box">--}}
                        {{--<div class="image-box">--}}
                            {{--<figure class="image"><a href="service-single.html"><img src="images/resource/featured-image-14.jpg" alt=""></a></figure>--}}
                            {{--<div class="caption-box">--}}
                                {{--<div class="icon"><span class="flaticon-yoga-sitting-posture-of-a-man"></span></div>--}}
                                {{--<h4 class="title"><a href="service-single.html">Healthy Daily Life</a></h4>--}}
                            {{--</div>--}}
                            {{--<!--Overlay-->--}}
                            {{--<div class="overlay-box">--}}
                                {{--<div class="icon-box"><span class="flaticon-yoga-sitting-posture-of-a-man"></span></div>--}}
                                {{--<div class="overlay-inner">--}}
                                    {{--<div class="overlay-content">--}}
                                        {{--<h4 class="title"><a href="service-single.html">Healthy Daily Life</a></h4>--}}
                                        {{--<div class="text">Finding a workout is as easy as scrolling down, picking out the session that matches your goals, andgetting your butt to the gym!</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!--Featured Service -->--}}
                {{--<div class="featured-service col-md-4 col-sm-6 col-xs-12">--}}
                    {{--<div class="inner-box">--}}
                        {{--<div class="image-box">--}}
                            {{--<figure class="image"><a href="service-single.html"><img src="images/resource/featured-image-15.jpg" alt=""></a></figure>--}}
                            {{--<div class="caption-box">--}}
                                {{--<div class="icon"><span class="flaticon-heartbeat"></span></div>--}}
                                {{--<h4 class="title"><a href="service-single.html">Improving Health</a></h4>--}}
                            {{--</div>--}}
                            {{--<!--Overlay-->--}}
                            {{--<div class="overlay-box">--}}
                                {{--<div class="icon-box"><span class="flaticon-heartbeat"></span></div>--}}
                                {{--<div class="overlay-inner">--}}
                                    {{--<div class="overlay-content">--}}
                                        {{--<h4 class="title"><a href="service-single.html">Improving Health</a></h4>--}}
                                        {{--<div class="text">Finding a workout is as easy as scrolling down, picking out the session that matches your goals, andgetting your butt to the gym!</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!--Featured Service -->


                <div class="featured-service col-md-4 col-sm-6 col-xs-12">

                    @foreach($services as $service)
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="service-single.html"><img src="{{asset('image/service-photo/'.$service->image)}}" width="100px",height="100x" alt=""></figure>
                            <div class="caption-box">
                                <div class="icon"><span class="{{$service->icon}}"></span></div>
                                <h4 class="title"><a href="#">{{ $service->title }}</a></h4>
                            </div>
                            <!--Overlay-->
                            <div class="overlay-box">
                                <div class="icon-box"></div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        {{--<h4 class="title">{{ $service->description }}<a href="service-single.html">Nutrition Strategies</a></h4>--}}
                                        <p style="display: inline; text-align: justify">

                                            @php
                                                $limit=1000;
                                                    if (strlen($service->description) > $limit){
                                                   echo $stringCut = substr($service->description, 0, $limit);
                                                   // echo substr($stringCut, 0, strrpos($stringCut, ''));
                                                    }
                                                     else
                                                    {
                                                    echo $service->description;
                                                    }
                                            @endphp
                                        </p>
                                        <a href="{{url('servicedetails/'.$service->id)}}"> [Continue Reading ...]</a>

                                        <div class="text"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>

                </div>

                <!--Featured Service -->


                <!--Featured Service -->

                <!--Featured Service -->


                <!--Featured Service -->

                <!--Featured Service -->


                <!--Featured Service -->


                <!--Featured Service -->

                <!--Featured Service -->

            </div>
        </div>
    </section>



@endsection