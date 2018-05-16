@extends('front.master')

@section('content')
    <!--Main Slider-->
,,    <section class="main-slider">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src="{{ asset('front/images/main-slider/image-1.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

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
                             data-endeasing="Power4.easeIn"><h4>Inspiring you to live a healthier lifestyle.</h4></div>

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
                             data-endeasing="Power4.easeIn"><h2>Hi, I’m Jacqueline <br>Your Health Advisor.</h2></div>

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
                             data-endeasing="Power4.easeIn"><div class="text">Health Coach provides world-class health, Yoga, fitness &amp; nutrition certification <br>programs to world-class professionals.</div></div>

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

                    <li data-transition="zoomin" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src="{{asset('front/images/main-slider/image-2.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption sfl sfb tp-resizeme"
                             data-x="left" data-hoffset="450"
                             data-y="center" data-voffset="-100"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"><h4>Inspiring you to live a healthier lifestyle.</h4></div>

                        <div class="tp-caption sfl sfb tp-resizeme"
                             data-x="left" data-hoffset="450"
                             data-y="center" data-voffset="20"
                             data-speed="1500"
                             data-start="1000"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"><h2>We are Certified <br>Personal Trainer’s</h2></div>

                        <div class="tp-caption sfl sfb tp-resizeme"
                             data-x="left" data-hoffset="450"
                             data-y="center" data-voffset="130"
                             data-speed="1500"
                             data-start="1500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"><div class="text">Health Coach provides world-class health, Yoga, fitness &amp; nutrition certification <br>programs to world-class professionals.</div></div>

                        <div class="tp-caption sfr sfb tp-resizeme"
                             data-x="left" data-hoffset="450"
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

                    <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src="{{ asset('front/images/main-slider/image-3.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

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
                             data-endeasing="Power4.easeIn"><h4>Inspiring you to live a healthier lifestyle.</h4></div>

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
                             data-endeasing="Power4.easeIn"><h2>Do Work That Aligns <br>with your Heart</h2></div>

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
                             data-endeasing="Power4.easeIn"><div class="text">Health Coach provides world-class health, Yoga, fitness &amp; nutrition certification <br>programs to world-class professionals.</div></div>

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

                </ul>

                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>


    <!--Why Us-->
    <section class="why-us">
        <div class="auto-container">

            <div class="sec-title centered">
                <h2>Why Choosing Health Coach</h2>
                <div class="separator"></div>
                <div class="desc-text">We handpick the best coaches and health experts from across the country to make sure you get the most personalized health care you deserve between those doctor visits.</div>
            </div>

            <div class="row clearfix">
                <!--Featured Service -->
                <div class="icon-column-two col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-exercising-man"></span></div>
                        <h3>Nutrition Strategies</h3>
                        <div class="text">The relationship between us mind and body actually teachings of great explorer truth.</div>
                    </div>
                </div>
                <!--Featured Service -->
                <div class="icon-column-two col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-eggs-1"></span></div>
                        <h3>Nutrition Strategies</h3>
                        <div class="text">The relationship between us mind and body actually teachings of great explorer truth.</div>
                    </div>
                </div>
                <!--Featured Service -->
                <div class="icon-column-two col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-eggs-1"></span></div>
                        <h3>Nutrition Strategies</h3>
                        <div class="text">The relationship between us mind and body actually teachings of great explorer truth.</div>
                    </div>
                </div>
                <!--Featured Service -->


            </div>

        </div>
    </section>


    <!--Services  Section-->
    <section class="services-section">
        <div class="auto-container">

            <div class="row clearfix">
                <!--Default Icon Column-->
                <div class="icon-column-default col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-brain"></span></div>
                        <h3>Balance Body &amp; Mind</h3>
                        <div class="text">The relationship between the mind and body is complex.</div>
                    </div>
                </div>
                <!--Default Icon Column-->
                <div class="icon-column-default col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-bicycle-rider"></span></div>
                        <h3>Physical Activity</h3>
                        <div class="text">Walking, running, dancing, swimming, yoga are a few physical activity.</div>
                    </div>
                </div>
                <!--Default Icon Column-->
                <div class="icon-column-default col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-dumbbell"></span></div>
                        <h3>Fitness &amp; Performance</h3>
                        <div class="text">We're here to help you overcome the barriers in the way to a healthier.</div>
                    </div>
                </div>
                <!--Default Icon Column-->
                <div class="icon-column-default col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-stretching-exercises"></span></div>
                        <h3>Exercise Program</h3>
                        <div class="text">You have to know which exercises are useful for which groups of muscles. </div>
                    </div>
                </div>
                <!--Default Icon Column-->
                <div class="icon-column-default col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-yoga-sitting-posture-of-a-man"></span></div>
                        <h3>Healthy Daily Life</h3>
                        <div class="text">People are most productive when they wake up, and setting up a routine.</div>
                    </div>
                </div>
                <!--Default Icon Column-->
                <div class="icon-column-default col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-heart-shape-outline-with-lifeline"></span></div>
                        <h3>Improving Health</h3>
                        <div class="text">The best soluton of course is combining diet improvements together.</div>
                    </div>
                </div>

            </div>

        </div>
    </section>



    <!--Experience Section-->
    <section class="experience-section" style="background-image:url({{ asset('front/images/background/image-1.jpg') }});">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title Column-->
                <div class="title-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h2>Over 20 Years of Experience</h2>
                        <div class="text">Health Coaches look at exercise, eating, wellness, and food not just as calories and weight loss, but also on mental, physical, and spiritual terms.</div>
                        <a href="contact.html" class="req-btn styled-font">Request a free consultation</a>
                    </div>
                </div>

                <!--Fact Counter-->
                <div class="factcounter-column col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <!--Fact Counter-->
                    <div class="fact-counter">
                        <div class="row clearfix">
                            <!--Column-->
                            <article class="column counter-column col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                                <div class="inner-box">
                                    <div class="icon"><span class="flaticon-stretching-exercises"></span></div>
                                    <div class="separator"></div>
                                    <div class="count-outer"><span class="count-text" data-speed="3000" data-stop="200">0</span>+</div>
                                    <h4 class="counter-title">Workout Sesisons</h4>
                                </div>
                            </article>

                            <!--Column-->
                            <article class="column counter-column col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                                <div class="inner-box">
                                    <div class="icon"><span class="flaticon-smiling-emoticon-square-face"></span></div>
                                    <div class="separator"></div>
                                    <div class="count-outer"><span class="count-text" data-speed="2000" data-stop="148">0</span>+</div>
                                    <h4 class="counter-title">Happy Customers </h4>
                                </div>
                            </article>

                            <!--Column-->
                            <article class="column counter-column col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                                <div class="inner-box">
                                    <div class="icon"><span class="flaticon-heart-shape-outline-with-lifeline"></span></div>
                                    <div class="separator"></div>
                                    <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="90">0</span></div>
                                    <h4 class="counter-title">Days of Program</h4>
                                </div>
                            </article>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!--Default Section-->
    <section class="default-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Text Column-->
                <div class="column video-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <!--featured-image-box-->
                        <div class="video-image-box">
                            <figure class="image"><img src="{{ asset('front/images/resource/featured-image-4.jpg')}}" alt="" /><a href="https://www.youtube.com/watch?v=1sVEYNH8gbk" class="overlay-link lightbox-image"><span class="icon flaticon-multimedia"></span></a></figure>
                            <div class="caption-box">“ Watch our video to learn how you can be a part of the health revolution as a Health Coach! “</div>
                        </div>
                    </div>
                </div>

                <!--Accordions Column-->
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">

                        <!--Accordion Box-->
                        <ul class="accordion-box">

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>A Natural way of improving your health.</div>
                                <div class="acc-content current">
                                    <div class="content clearfix">
                                        <figure class="image"><img src="{{ asset('front/images/resource/featured-thumb-1.jpg')}}" alt=""></figure>
                                        <p>Health Coach look at exercise, eating, wellness and food not just as calories and weight loss, but also emotional, mental, physical, and spiritual terms. An Integrative with Nutrition Health Coach who’s providing services in area knows like state of mind, health history background, as well as sleep patterns.</p>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Create Your Healthier Lives </div>
                                <div class="acc-content">
                                    <div class="content clearfix">
                                        <figure class="image"><img src="{{ asset('front/images/resource/featured-thumb-1.jpg')}}" alt=""></figure>
                                        <p>Health Coach look at exercise, eating, wellness and food not just as calories and weight loss, but also emotional, mental, physical, and spiritual terms. An Integrative with Nutrition Health Coach who’s providing services in area knows like state of mind, health history background, as well as sleep patterns.</p>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Healthy and Delicious Recipes</div>
                                <div class="acc-content">
                                    <div class="content clearfix">
                                        <figure class="image"><img src="{{ asset('front/images/resource/featured-thumb-1.jpg')}}" alt=""></figure>
                                        <p>Health Coach look at exercise, eating, wellness and food not just as calories and weight loss, but also emotional, mental, physical, and spiritual terms. An Integrative with Nutrition Health Coach who’s providing services in area knows like state of mind, health history background, as well as sleep patterns.</p>
                                    </div>
                                </div>
                            </li>

                        </ul><!--End Accordion Box-->
                    </div>
                </div>

            </div>
        </div>
    </section>


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
    <section class="work-steps">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Step COlumn-->
                <div class="step-column col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('front/images/resource/featured-image-5.jpg')}}" alt=""></figure>
                            <div class="count">1</div>
                        </div>
                        <div class="lower-content">
                            <h3>Connect With Us</h3>
                            <div class="text">You have the power to create your own schedule</div>
                        </div>
                    </div>
                </div>

                <!--Step COlumn-->
                <div class="step-column col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('front/images/resource/featured-image-6.jpg')}}" alt=""></figure>
                            <div class="count">2</div>
                        </div>
                        <div class="lower-content">
                            <h3>Go Natural</h3>
                            <div class="text">You have the power to create your own schedule</div>
                        </div>
                    </div>
                </div>

                <!--Step COlumn-->
                <div class="step-column col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('front/images/resource/featured-image-7.jpg')}}" alt=""></figure>
                            <div class="count">3</div>
                        </div>
                        <div class="lower-content">
                            <h3>Schedule Exercise</h3>
                            <div class="text">You have the power to create your own schedule</div>
                        </div>
                    </div>
                </div>

                <!--Step COlumn-->
                <div class="step-column col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure class="image"><img src="{ asset('front/images/resource/featured-image-8.jpg')}}" alt=""></figure>
                            <div class="count">4</div>
                        </div>
                        <div class="lower-content">
                            <h3>Celebrate Success</h3>
                            <div class="text">You have the power to create your own schedule</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--News Section-->
    <section class="news-section">
        <div class="auto-container">

            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>News and Articles</h2>
                        <div class="separator"></div>
                    </div>

                    <div class="link-outer pull-right">
                        <a href="blog.html" class="more-link theme-btn btn-style-three">Read More News</a>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <!--News Style One-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="blog-single.html"><img src="{ asset('front/images/resource/blog-image-1.jpg')}}" alt=""></a></figure>
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
                        <figure class="image-box"><a href="blog-single.html"><img src="{ asset('front/images/resource/blog-image-2.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="posted-info">August 22, 2016</div>
                            <div class="post-author-info">by Alex Neil </div>
                            <h3><a href="blog-single.html">What is a “Healthy” Food? The Answer Will Surprise You</a></h3>
                            <div class="text">Perspiciatis unde omnis iste natus sed error voluptatem accusantium uts doloremque laudantium, totrem explicabo [...]</div>
                        </div>
                    </div>
                </div>

                <!--News Style One-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="blog-single.html"><img src="{ asset('front/images/resource/blog-image-3.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="posted-info">August 26, 2016</div>
                            <div class="post-author-info">by Venannda Joy </div>
                            <h3><a href="blog-single.html">Build an Athletic Body With In Eight Weeks Time</a></h3>
                            <div class="text">How all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete [...]</div>
                        </div>
                    </div>
                </div>

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
                            <form method="post" action="http://world5.commonsupport.com/html2/health-coach/contact.html">
                                <div class="row clearfix">
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

                                </div>

                            </form>

                        </div>

                        <div class="text-content">
                            <p><strong>For Enquiry:</strong>  For Enquiry fill our short feedback form or you can also send us an <a href="mailto:email@mail.com">email</a> and we’ll get in touch shortly, or Troll Free Number - <a href="#">(+91) 00-700-6202.</a></p>
                            <p><strong>Office Hours :</strong> 07:30 and 19:00 Mon to Sat, Sun - Holiday</p>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>
    @endsection