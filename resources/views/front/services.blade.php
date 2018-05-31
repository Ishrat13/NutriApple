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