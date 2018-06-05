@extends('front.master')
@section('content')
    <section class="page-title" style="background-image:url(front/images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Nutriapple</h1>
            <h3 class="styled-font">Using Food As Medicine.</h3>
        </div>
    </section>

    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="breadcrumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Default Section-->
    <section class="default-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Video Column-->
                <div class="column video-column col-md-6 col-sm-12 col-xs-12">
                    @foreach($abouts as $about)
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--featured-image-box-->
                        <div class="video-image-box">
                            <figure class="image-box"><img src="{{asset('image/about-photo/'.$about->image)}}" width="100px",height="100x" alt=""></figure>
                            <div class="caption-box"></div>
                        </div>
                    </div>
                </div>

                <!--Text Column -->
                <div class="column text-column col-md-6 col-sm-12 col-xs-12">



                    <h2> <a href="#">{{ $about->title }}</a></h2>
                    <div class="inner-box">
                        <div class="text">{!! $about->details !!} </div>
                        {{--<div class="signature-image"><img src="{{ asset('front/images/resource/signature.png')}}" alt=""></div>--}}
                        <div class="about-owner">
                            <h4>{{ $about->subtitle }} <span class="designation">Founder</span></h4>
                            <div class="company-title styled-font">NutriApple</div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>




@endsection