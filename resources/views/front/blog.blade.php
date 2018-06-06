@extends('front.master')
@section('title', 'NutriApple | Blog')
@section('content')

<section class="page-title" style="background-image:url(front/images/background/bg-page-title-1.jpg);">
    <div class="auto-container">
        <h1>Grid View Without Sidebar</h1>
        <h3 class="styled-font">We Offer healthier lifestyle.</h3>
    </div>
</section>

<!--Page Info-->
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


<!--News Section-->
<section class="news-section grid-view">
    <div class="auto-container">

        <div class="row clearfix">

            <!--News Style One-->
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">


                @foreach($blogs as $blog)

                    <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('image/blog-photo/'.$blog->image)}}" width="100px",height="100x" alt=""></figure>
                    <div class="lower-content">
                        <div class="posted-info">{{ $blog->created_at->diffForHumans() }}</div>
                        <div class="post-author-info">{{ $blog->author }} </div>
                        <h3><a href="#">{{ $blog->title }}</a></h3>
                        {{--<div class="text">{{$blog->blog_post}}</div>--}}
                    </div>

                    <p style="display: inline; text-align: justify">

                        @php
                            $limit=500;
                                if (strlen($blog->blog_post) > $limit){
                               echo $stringCut = substr($blog->blog_post, 0, $limit);
                               // echo substr($stringCut, 0, strrpos($stringCut, ''));
                                }
                                 else
                                {
                                echo $blog->blog_post;
                                }
                        @endphp
                    </p>
                    <a href="{{url('blogdetails/'.$blog->id)}}"> [Continue Reading ...]</a>

                </div>
                @endforeach
            </div>



        </div>




        <!-- Styled Pagination -->
        <div class="styled-pagination text-center">
            <ul>
                <li><a class="prev" href="#"><span class="fa fa-caret-left"></span></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a class="next" href="#"><span class="fa fa-caret-right"></span></a></li>
            </ul>
        </div>


    </div>
</section>
    @endsection