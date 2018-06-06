@extends('front.master')
@section('content')
    <!--Main Slider-->
    <section class="main-slider">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    @foreach($sliders as $slider)
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src="{{asset('image/slider-photo/'.$slider->image)}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption sfl sfb tp-resizeme"
                             data-x="left" data-hoffset="15"
                             data-y="center" data-voffset="-100"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"><h4>{{$slider->title}}</h4></div>

                        <div class="tp-caption sfl sfb tp-resizeme"
                             data-x="left" data-hoffset="15"
                             data-y="center" data-voffset="20"
                             data-speed="1500"
                             data-start="1000"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"><h2>{{$slider->subtitle}} </h2></div>

                        <div class="tp-caption sfl sfb tp-resizeme"
                             data-x="left" data-hoffset="15"
                             data-y="center" data-voffset="130"
                             data-speed="1500"
                             data-start="1500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"><div class="text">{{ $slider->text}} <br></div></div>

                        <div class="tp-caption sfr sfb tp-resizeme"
                             data-x="left" data-hoffset="15"
                             data-y="center" data-voffset="220"
                             data-speed="1500"
                             data-start="2000"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"><a href="about-us.html" class="theme-btn btn-style-one">Know more</a> &ensp; <a href="contact.html" class="theme-btn btn-style-two">Contact Us</a></div>

                    </li>
                        @endforeach

                </ul>

                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>


    <!--Why Us-->
    <section class="why-us">
        <div class="auto-container">

            <div class="sec-title centered">
                <h2>Why Choosing NutriApple</h2>
                <div class="separator"></div>
                <div class="desc-text">We handpick the best coaches and health experts from across the country to make sure you get the most personalized health care you deserve between those doctor visits.</div>
            </div>

            <div class="row clearfix">
                <!--Featured Service -->

                @foreach($chooses as $choose)


                <div class="icon-column-two col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="{{$choose->icon}}"></span></div>
                        <h3>{{$choose->title}}</h3>
                        <div class="text">{{$choose->description}}</div>
                    </div>
                </div>
                <!--Featured Service -->
            {{--<div class="icon-column-two col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
            {{--<div class="inner-box">--}}
            {{--<div class="icon-box"><span class="flaticon-eggs-1"></span></div>--}}
            {{--<h3>Nutrition Strategies</h3>--}}
            {{--<div class="text">The relationship between us mind and body actually teachings of great explorer truth.</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <!--Featured Service -->
            {{--<div class="icon-column-two col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
            {{--<div class="inner-box">--}}
            {{--<div class="icon-box"><span class="flaticon-eggs-1"></span></div>--}}
            {{--<h3>Nutrition Strategies</h3>--}}
            {{--<div class="text">The relationship between us mind and body actually teachings of great explorer truth.</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <!--Featured Service -->
                @endforeach

            </div>


        </div>
    </section>


    <!--Services  Section-->



    <!--Experience Section-->



    <!--Default Section-->



    <!--Testimonials Section-->
    <section class="testimonials-section">
        <div class="auto-container">

            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Successful Stories</h2>
                        <div class="separator"></div>
                    </div>

                    <div class="link-outer pull-right">
                        <a href="about-us.html" class="more-link theme-btn btn-style-three">Read More Stories</a>
                    </div>
                </div>
            </div>

            <div class="carousel-outer">
                <div class="testimonials-carousel">

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="inner-box">
                            <div class="slide-header">
                                <figure class="author-thumb"><img src="{{ asset('front/images/resource/author-thumb-1.jpg')}}" alt=""></figure>
                                <h4>Stephanie Gaskel</h4>
                                <div class="designation">Lost 128 Pounds and 3 Sizes</div>
                            </div>
                            <div class="slide-content">In 10 months of following Health Coach, Joe has lost 128 pounds. If you are overweight, out of shape, and worried that it’s too late to get started.</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="inner-box">
                            <div class="slide-header">
                                <figure class="author-thumb"><img src="{{ asset('front/images/resource/author-thumb-2.jpg')}}" alt=""></figure>
                                <h4>Amelia Pilichiewicz</h4>
                                <div class="designation">Lost 200 Pounds and 5 Sizes</div>
                            </div>
                            <div class="slide-content">Ladies, meet your new hero.  Men, prepare to be humbled.  My friend Staci, or Spezzy as she’s known around health Coach, has one of the best success stories.</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="inner-box">
                            <div class="slide-header">
                                <figure class="author-thumb"><img src="{{ asset('front/images/resource/author-thumb-3.jpg')}}" alt=""></figure>
                                <h4>James Vilton</h4>
                                <div class="designation">Lost 180 Pounds and 2 Sizes</div>
                            </div>
                            <div class="slide-content">Over the past two years, he was able to slowly and steadily bring that down before having an incredible breakthrough that allowed him to transform drastically. </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="inner-box">
                            <div class="slide-header">
                                <figure class="author-thumb"><img src="{{ asset('front/images/resource/author-thumb-1.jpg')}}" alt=""></figure>
                                <h4>Stephanie Gaskel</h4>
                                <div class="designation">Lost 128 Pounds and 3 Sizes</div>
                            </div>
                            <div class="slide-content">In 10 months of following Health Coach, Joe has lost 128 pounds. If you are overweight, out of shape, and worried that it’s too late to get started.</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="inner-box">
                            <div class="slide-header">
                                <figure class="author-thumb"><img src="{{ asset('front/images/resource/author-thumb-2.jpg')}}" alt=""></figure>
                                <h4>Amelia Pilichiewicz</h4>
                                <div class="designation">Lost 200 Pounds and 5 Sizes</div>
                            </div>
                            <div class="slide-content">Ladies, meet your new hero.  Men, prepare to be humbled.  My friend Staci, or Spezzy as she’s known around health Coach, has one of the best success stories.</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="inner-box">
                            <div class="slide-header">
                                <figure class="author-thumb"><img src="images/resource/author-thumb-3.jpg" alt=""></figure>
                                <h4>James Vilton</h4>
                                <div class="designation">Lost 180 Pounds and 2 Sizes</div>
                            </div>
                            <div class="slide-content">Over the past two years, he was able to slowly and steadily bring that down before having an incredible breakthrough that allowed him to transform drastically. </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="inner-box">
                            <div class="slide-header">
                                <figure class="author-thumb"><img src="{{ asset('front/images/resource/author-thumb-1.jpg')}}" alt=""></figure>
                                <h4>Stephanie Gaskel</h4>
                                <div class="designation">Lost 128 Pounds and 3 Sizes</div>
                            </div>
                            <div class="slide-content">In 10 months of following Health Coach, Joe has lost 128 pounds. If you are overweight, out of shape, and worried that it’s too late to get started.</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="inner-box">
                            <div class="slide-header">
                                <figure class="author-thumb"><img src="{{ asset('front/images/resource/author-thumb-2.jpg')}}" alt=""></figure>
                                <h4>Amelia Pilichiewicz</h4>
                                <div class="designation">Lost 200 Pounds and 5 Sizes</div>
                            </div>
                            <div class="slide-content">Ladies, meet your new hero.  Men, prepare to be humbled.  My friend Staci, or Spezzy as she’s known around health Coach, has one of the best success stories.</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="inner-box">
                            <div class="slide-header">
                                <figure class="author-thumb"><img src="{{ asset('front/images/resource/author-thumb-3.jpg')}}" alt=""></figure>
                                <h4>James Vilton</h4>
                                <div class="designation">Lost 180 Pounds and 2 Sizes</div>
                            </div>
                            <div class="slide-content">Over the past two years, he was able to slowly and steadily bring that down before having an incredible breakthrough that allowed him to transform drastically. </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!--Work Steps Section-->



    <!--News Section-->
    <section class="news-section">
        <div class="auto-container">

            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Health Tips and Blogs</h2>
                        <div class="separator"></div>
                    </div>

                    <div class="link-outer pull-right">
                        <a href="blog.html" class="more-link theme-btn btn-style-three">Read More News</a>
                    </div>
                </div>
            </div>

            @foreach($blogs as $blog)


            <div class="row clearfix">
                <!--News Style One-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="blog-single.html">
                                <img src="{{asset('image/blog-photo/'.$blog->image)}}"></a></figure>
                        <div class="lower-content">
                            <div class="posted-info">{{ $blog->created_at->diffForHumans() }}</div>
                            <div class="post-author-info">by {{ $blog->author }}</div>
                            <h3><a href="blog-single.html">{{ $blog->title }}</a></h3>
                            <p style="display: inline; text-align: justify">

                                @php
                                    $limit=100;
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
                    </div>
                </div>

                <!--News Style One-->
                {{--<div class="news-style-one col-md-4 col-sm-6 col-xs-12">--}}
                    {{--<div class="inner-box">--}}
                        {{--<figure class="image-box"><a href="blog-single.html"><img src="{ asset('front/images/resource/blog-image-2.jpg')}}" alt=""></a></figure>--}}
                        {{--<div class="lower-content">--}}
                            {{--<div class="posted-info">August 22, 2016</div>--}}
                            {{--<div class="post-author-info">by Alex Neil </div>--}}
                            {{--<h3><a href="blog-single.html">What is a “Healthy” Food? The Answer Will Surprise You</a></h3>--}}
                            {{--<div class="text">Perspiciatis unde omnis iste natus sed error voluptatem accusantium uts doloremque laudantium, totrem explicabo [...]</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!--News Style One-->--}}
                {{--<div class="news-style-one col-md-4 col-sm-6 col-xs-12">--}}
                    {{--<div class="inner-box">--}}
                        {{--<figure class="image-box"><a href="blog-single.html"><img src="{ asset('front/images/resource/blog-image-3.jpg')}}" alt=""></a></figure>--}}
                        {{--<div class="lower-content">--}}
                            {{--<div class="posted-info">August 26, 2016</div>--}}
                            {{--<div class="post-author-info">by Venannda Joy </div>--}}
                            {{--<h3><a href="blog-single.html">Build an Athletic Body With In Eight Weeks Time</a></h3>--}}
                            {{--<div class="text">How all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete [...]</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                @endforeach
            </div>



        </div>
    </section>


    <!--Two Column Fluid Section-->
    <section class="two-col-fluid">
        <div class="outer-box clearfix">

            <!--Image Column-->
            <div class="image-column" style="background-image:url(front/images/resource/featured-image-9.jpg);">
                <figure class="image-box"><img src="images/resource/featured-image-9.jpg" alt=""></figure>
            </div>

            <!--Conent Column-->
            <div class="content-column">
                <div class="clearfix">
                    <div class="inner-box">

                        <div class="sec-title"><h2>Make an Appointment</h2><div class="separator"></div></div>

                        <div class="default-form">
                            {{--<form method="post" action="http://world5.commonsupport.com/html2/health-coach/contact.html">--}}
                                <div class="row clearfix">

                                    <form action="{{route('appointment')}}" method="post" enctype="multipart/form-data">

                                        {{csrf_field()}}

                                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="fname" value="" placeholder="First Name *" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="lname" value="" placeholder="Last Name *" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Your Email *" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" value="" placeholder="Phone Number *" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Type Your Message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-one">Submit request</button>
                                        </div>
                                    </div>


                                    </form>

                        </div>

                        <div class="text-content">
                            <p><strong>Office Hours :</strong> 07:30 and 19:00 Mon to Sat, Sun - Holiday</p>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>
    @endsection