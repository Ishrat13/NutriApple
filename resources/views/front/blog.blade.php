@extends('front.master')
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
                <div class="inner-box">
                    <figure class="image-box"><a href="blog-single.html"><img src="{{ asset('front/images/resource/blog-image-1.jpg') }}" alt=""></a></figure>
                    <div class="lower-content">
                        <div class="posted-info">August 20, 2016</div>
                        <div class="post-author-info">by Erik Momsen </div>
                        <h3><a href="blog-single.html">Stop Getting Annoyed If You Want Better Health</a></h3>
                        <div class="text">At Integrative Nutrition, we teach the concept of Primary Food which is everything that nourishes your life [...]</div>
                    </div>
                </div>
            </div>

            <!--News Style One-->
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><a href="blog-single.html"><img src="{{ asset('front/images/resource/blog-image-2.jpg')}}" alt=""></a></figure>
                    <div class="lower-content">
                        <div class="posted-info">August 22, 2016</div>
                        <div class="post-author-info">by Alex Neil </div>
                        <h3><a href="blog-single.html">What is a “Healthy” Food? The Answer</a></h3>
                        <div class="text">Perspiciatis unde omnis iste natus sed error voluptatem accusantium uts doloremque laudantium, totrem explicabo [...]</div>
                    </div>
                </div>
            </div>

            <!--News Style One-->
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><a href="blog-single.html"><img src="{{ asset('front/images/resource/blog-image-3.jpg')}}" alt=""></a></figure>
                    <div class="lower-content">
                        <div class="posted-info">August 24, 2016</div>
                        <div class="post-author-info">by Venannda Joy </div>
                        <h3><a href="blog-single.html">Build an Athletic Body With In Eight Weeks Time</a></h3>
                        <div class="text">How all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete [...]</div>
                    </div>
                </div>
            </div>

            <!--News Style One-->
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><a href="blog-single.html"><img src="{{ asset('front/images/resource/blog-image-5.jpg')}}" alt=""></a></figure>
                    <div class="lower-content">
                        <div class="posted-info">August 26, 2016</div>
                        <div class="post-author-info">by William Son </div>
                        <h3><a href="blog-single.html">Get Free Weight Lose Tips From Our Experts</a></h3>
                        <div class="text">All this mistaken idea of denouncing and praising pain was born and will give you a completeof the system [...]</div>
                    </div>
                </div>
            </div>

            <!--News Style One-->
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><a href="blog-single.html"><img src="{{ asset('front/images/resource/blog-image-6.jpg')}}" alt=""></a></figure>
                    <div class="lower-content">
                        <div class="posted-info">August 28, 2016</div>
                        <div class="post-author-info">by Steve Rock </div>
                        <h3><a href="blog-single.html">Yoga and Healthy Food Making Your Family Happy</a></h3>
                        <div class="text">We teach the concept of Primary sed Food which that nourishes your life perspiciatis seds unde omnis iste [...]</div>
                    </div>
                </div>
            </div>

            <!--News Style One-->
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><a href="blog-single.html"><img src="{{ asset('front/images/resource/blog-image-7.jpg')}}" alt=""></a></figure>
                    <div class="lower-content">
                        <div class="posted-info">August 30, 2016</div>
                        <div class="post-author-info">by Erik Momsen  </div>
                        <h3><a href="blog-single.html">Our Trainer Teaching About Fitness to Senior Person </a></h3>
                        <div class="text">At Integrative Nutrition, we teach the concept of Primary Food which is everything that nourishes your life [...]</div>
                    </div>
                </div>
            </div>

            <!--News Style One-->
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><a href="blog-single.html"><img src="{{ asset('front/images/resource/blog-image-8.jpg')}}" alt=""></a></figure>
                    <div class="lower-content">
                        <div class="posted-info">August 12, 2016</div>
                        <div class="post-author-info">by Alex Neil </div>
                        <h3><a href="blog-single.html">Women Doing Pilates Exercise to Control Her Fitness</a></h3>
                        <div class="text">Perspiciatis unde omnis iste natus sed error voluptatem accusantium uts doloremque laudantium, totrem explicabo [...]</div>
                    </div>
                </div>
            </div>

            <!--News Style One-->
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><a href="blog-single.html"><img src="{{ asset('front/images/resource/blog-image-9.jpg')}}" alt=""></a></figure>
                    <div class="lower-content">
                        <div class="posted-info">August 22, 2016</div>
                        <div class="post-author-info">by William Son </div>
                        <h3><a href="blog-single.html">Happy Senior Training With Our Award Winning Trainee</a></h3>
                        <div class="text">How all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete [...]</div>
                    </div>
                </div>
            </div>

            <!--News Style One-->
            <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><a href="blog-single.html"><img src="{{ asset('front/images/resource/blog-image-10.jpg')}}" alt=""></a></figure>
                    <div class="lower-content">
                        <div class="posted-info">August 14, 2016</div>
                        <div class="post-author-info">by Ashley Fletcher </div>
                        <h3><a href="blog-single.html">Older Women Assisted By Our Young Yoga Trainer</a></h3>
                        <div class="text">All this mistaken idea of denouncing and praising pain was born and will give you a completeof the system [...]</div>
                    </div>
                </div>
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