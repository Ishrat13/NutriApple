@extends('front.master')
@section('title', 'NutriApple | Service')
@section('content')


    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="breadcrumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Our Blog</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="blog-details post-details">

        <div class="news-style-one">


            <div class="inner-box">
                <figure class="image-box"><img src="{{asset('image/service-photo/'.$services->image)}}" ></figure>
                <div class="lower-content">
                    <div class="posted-info">{{ $services->created_at->diffForHumans() }}</div>

                    <ul class="post-meta clearfix">
                        <div class="icon"><span class="{{$services->icon}}"></span></div>
                        {{--<li><a href="#"><span class="icon fa fa-tags"></span> Fitness, Healthy Food</a></li>--}}
                        {{--<li><a href="#"><span class="icon fa fa-comments"></span> 43 Comments</a></li>--}}
                    </ul>

                    <h3>{{ $services->title }}</h3>
                    <div class="text text-content">
                        <p>{{ $services->description }}</p>
                        <br>

                    </div>

                    <div class="post-bottom clearfix">


                        <ul class="post-controls pull-right clearfix">
                            <li><a href="#" class="prev-post"><span class="fa fa-angle-left"></span> &nbsp; Prev</a></li>
                            <li><a href="#" class="next-post">Next &nbsp; <span class="fa fa-angle-right"></span></a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection