@extends('front.master')
@section('content')
    <section class="page-title" style="background-image:url(front/images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>About Us</h1>
            <h3 class="styled-font">We Offer healthier lifestyle.</h3>
        </div>
    </section>

    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="breadcrumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
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
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--featured-image-box-->
                        <div class="video-image-box">
                            <figure class="image"><img src="{{ asset('front/images/resource/featured-image-4.jpg')}}" alt="" /><a href="https://www.youtube.com/watch?v=1sVEYNH8gbk" class="overlay-link lightbox-image"><span class="icon flaticon-multimedia"></span></a></figure>
                            <div class="caption-box">“ Watch our video to learn how you can be a part of the health revolution as a Health Coach! “</div>
                        </div>
                    </div>
                </div>

                <!--Text Column -->
                <div class="column text-column col-md-6 col-sm-12 col-xs-12">
                    <h2>We Have The Best Caretaker to Providing Best Services  <a href="#">Purchase - Healthcoach.</a></h2>
                    <div class="inner-box">
                        <div class="text">Explain to you how all this mistaken idea of denouncing ut pleasure work praising pain was born and  will give you can complete design account sed the system, and expound the actual teachngs interior of the great design explorer of the truth master-builders design of human happiness one seds rejects, dislikes, or avoids pleasures give of the master-builder of human itself.</div>
                        <div class="signature-image"><img src="{{ asset('front/images/resource/signature.png')}}" alt=""></div>
                        <div class="about-owner">
                            <h4>William Shocks, <span class="designation">Founder</span></h4>
                            <div class="company-title styled-font">Healthcoach</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Certificates Section-->
    <section class="certificates-section">
        <div class="auto-container">

            <div class="sec-title centered">
                <h2>Certificates</h2>
                <div class="separator"></div>
            </div>

            <div class="carousel-outer">
                <div class="certificates-carousel">

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{asset(' front/images/resource/certificate-image-1.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-1.jpg" alt=""></a></figure>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{asset(' front/images/resource/certificate-image-2.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-2.jpg" alt=""></a></figure>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{ asset('front/images/resource/certificate-image-3.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-3.jpg" alt=""></a></figure>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{ asset('front/images/resource/certificate-image-4.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-4.jpg" alt=""></a></figure>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{ asset('front/images/resource/certificate-image-1.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-1.jpg" alt=""></a></figure>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{ asset('front/images/resource/certificate-image-2.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-2.jpg" alt=""></a></figure>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{ asset('front/images/resource/certificate-image-3.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-3.jpg" alt=""></a></figure>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{ asset('front/images/resource/certificate-image-4.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-4.jpg" alt=""></a></figure>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{ asset('front/images/resource/certificate-image-1.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-1.jpg" alt=""></a></figure>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{ asset('front/images/resource/certificate-image-2.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-2.jpg" alt=""></a></figure>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{ asset('front/images/resource/certificate-image-3.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-3.jpg" alt=""></a></figure>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <figure class="image-box"><a href="{{ asset('front/images/resource/certificate-image-4.jpg')}}" class="lightbox-image" title="Caption Here"><img src="images/resource/certificate-image-4.jpg" alt=""></a></figure>
                    </div>


                </div>
            </div>

        </div>
    </section>


    <!--Why Choose Us  Section-->
    <section class="why-choose-us">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Why People Choose Us</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">
                <!--Default Icon Column-->
                <div class="icon-column-default col-lg-4 col-md-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-web-development"></span></div>
                        <h3>25 Years of Experince</h3>
                        <div class="text">The relationship between the mind and body is complex.</div>
                    </div>
                </div>
                <!--Default Icon Column-->
                <div class="icon-column-default col-lg-4 col-md-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-time-left"></span></div>
                        <h3>24/7 Online Support</h3>
                        <div class="text">Walking, running, dancing, swimming, yoga are a few physical activity.</div>
                    </div>
                </div>
                <!--Default Icon Column-->
                <div class="icon-column-default col-lg-4 col-md-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-stretching-exercises"></span></div>
                        <h3>Experinced Coachers</h3>
                        <div class="text">We're here to help you overcome the barriers in the way to a healthier.</div>
                    </div>
                </div>
                <!--Default Icon Column-->
                <div class="icon-column-default col-lg-4 col-md-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-users"></span></div>
                        <h3>Exclusive Partnership</h3>
                        <div class="text">You have to know which exercises are useful for which groups of muscles.  </div>
                    </div>
                </div>
                <!--Default Icon Column-->
                <div class="icon-column-default col-lg-4 col-md-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-compass"></span></div>
                        <h3>Best Quality Products</h3>
                        <div class="text">People are most productive when they wake up, and setting up a routine.</div>
                    </div>
                </div>
                <!--Default Icon Column-->
                <div class="icon-column-default col-lg-4 col-md-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-like-1"></span></div>
                        <h3>Business Opportunities</h3>
                        <div class="text">The best soluton of course is combining diet improvements together.</div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">

            <div class="row clearfix">
                <!--Content-column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h2>Meet Our Team</h2>
                        <div class="separator"></div>
                    </div>

                    <div class="carousel-outer">
                        <!--Team Data Carousel-->
                        <div class="team-data-carousel">
                            <!--Slide Item-->
                            <div class="slide-item">
                                <div class="inner-box">
                                    <div class="info">
                                        <h3>Astley Fletcher,</h3>
                                        <div class="designation styled-font">CEO and Founder</div>
                                    </div>

                                    <div class="desc-text">Must explain to you how all this mistaken idea of denouncings pleasure and pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder.</div>
                                    <div class="social-links"><a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-pinterest-p"></span></a></div>
                                </div>
                            </div>

                            <!--Slide Item-->
                            <div class="slide-item">
                                <div class="inner-box">
                                    <div class="info">
                                        <h3>Astley Fletcher,</h3>
                                        <div class="designation styled-font">CEO and Founder</div>
                                    </div>

                                    <div class="desc-text">Must explain to you how all this mistaken idea of denouncings pleasure and pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder.</div>
                                    <div class="social-links"><a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-pinterest-p"></span></a></div>
                                </div>
                            </div>

                            <!--Slide Item-->
                            <div class="slide-item">
                                <div class="inner-box">
                                    <div class="info">
                                        <h3>Astley Fletcher,</h3>
                                        <div class="designation styled-font">CEO and Founder</div>
                                    </div>

                                    <div class="desc-text">Must explain to you how all this mistaken idea of denouncings pleasure and pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder.</div>
                                    <div class="social-links"><a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-pinterest-p"></span></a></div>
                                </div>
                            </div>

                            <!--Slide Item-->
                            <div class="slide-item">
                                <div class="inner-box">
                                    <div class="info">
                                        <h3>Astley Fletcher,</h3>
                                        <div class="designation styled-font">CEO and Founder</div>
                                    </div>

                                    <div class="desc-text">Must explain to you how all this mistaken idea of denouncings pleasure and pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder.</div>
                                    <div class="social-links"><a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-pinterest-p"></span></a></div>
                                </div>
                            </div>

                            <!--Slide Item-->
                            <div class="slide-item">
                                <div class="inner-box">
                                    <div class="info">
                                        <h3>Astley Fletcher,</h3>
                                        <div class="designation styled-font">CEO and Founder</div>
                                    </div>

                                    <div class="desc-text">Must explain to you how all this mistaken idea of denouncings pleasure and pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder.</div>
                                    <div class="social-links"><a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-pinterest-p"></span></a></div>
                                </div>
                            </div>

                            <!--Slide Item-->
                            <div class="slide-item">
                                <div class="inner-box">
                                    <div class="info">
                                        <h3>Astley Fletcher,</h3>
                                        <div class="designation styled-font">CEO and Founder</div>
                                    </div>

                                    <div class="desc-text">Must explain to you how all this mistaken idea of denouncings pleasure and pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder.</div>
                                    <div class="social-links"><a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-pinterest-p"></span></a></div>
                                </div>
                            </div>

                            <!--Slide Item-->
                            <div class="slide-item">
                                <div class="inner-box">
                                    <div class="info">
                                        <h3>Astley Fletcher,</h3>
                                        <div class="designation styled-font">CEO and Founder</div>
                                    </div>

                                    <div class="desc-text">Must explain to you how all this mistaken idea of denouncings pleasure and pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder.</div>
                                    <div class="social-links"><a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-pinterest-p"></span></a></div>
                                </div>
                            </div>

                            <!--Slide Item-->
                            <div class="slide-item">
                                <div class="inner-box">
                                    <div class="info">
                                        <h3>Astley Fletcher,</h3>
                                        <div class="designation styled-font">CEO and Founder</div>
                                    </div>

                                    <div class="desc-text">Must explain to you how all this mistaken idea of denouncings pleasure and pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder.</div>
                                    <div class="social-links"><a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-pinterest-p"></span></a></div>
                                </div>
                            </div>

                            <!--Slide Item-->
                            <div class="slide-item">
                                <div class="inner-box">
                                    <div class="info">
                                        <h3>Astley Fletcher,</h3>
                                        <div class="designation styled-font">CEO and Founder</div>
                                    </div>

                                    <div class="desc-text">Must explain to you how all this mistaken idea of denouncings pleasure and pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder.</div>
                                    <div class="social-links"><a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-pinterest-p"></span></a></div>
                                </div>
                            </div>

                            <!--Slide Item-->
                            <div class="slide-item">
                                <div class="inner-box">
                                    <div class="info">
                                        <h3>Astley Fletcher,</h3>
                                        <div class="designation styled-font">CEO and Founder</div>
                                    </div>

                                    <div class="desc-text">Must explain to you how all this mistaken idea of denouncings pleasure and pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder.</div>
                                    <div class="social-links"><a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-pinterest-p"></span></a></div>
                                </div>
                            </div>

                        </div>

                        <!--Team Thumbs Carousel-->
                        <div class="team-thumbs-carousel">
                            <div class="thumb-item"><figure class="thumb-box img-circle"><img class="img-circle" src="{{ asset('front/images/resource/team-thumb-1.jpg')}}" alt=""><span class="overlay"></span></figure></div>
                            <div class="thumb-item"><figure class="thumb-box img-circle"><img class="img-circle" src="{{ asset('front/images/resource/team-thumb-1.jpg')}}" alt=""><span class="overlay"></span></figure></div>
                            <div class="thumb-item"><figure class="thumb-box img-circle"><img class="img-circle" src="{{ asset('front/images/resource/team-thumb-1.jpg')}}" alt=""><span class="overlay"></span></figure></div>
                            <div class="thumb-item"><figure class="thumb-box img-circle"><img class="img-circle" src="{{ asset('front/images/resource/team-thumb-1.jpg')}}" alt=""><span class="overlay"></span></figure></div>
                            <div class="thumb-item"><figure class="thumb-box img-circle"><img class="img-circle" src="{{ asset('front/images/resource/team-thumb-1.jpg')}}" alt=""><span class="overlay"></span></figure></div>
                            <div class="thumb-item"><figure class="thumb-box img-circle"><img class="img-circle" src="{{ asset('front/images/resource/team-thumb-1.jpg')}}" alt=""><span class="overlay"></span></figure></div>
                            <div class="thumb-item"><figure class="thumb-box img-circle"><img class="img-circle" src="{{ asset('front/images/resource/team-thumb-1.jpg')}}" alt=""><span class="overlay"></span></figure></div>
                            <div class="thumb-item"><figure class="thumb-box img-circle"><img class="img-circle" src="{{ asset('front/images/resource/team-thumb-1.jpg')}}" alt=""><span class="overlay"></span></figure></div>
                            <div class="thumb-item"><figure class="thumb-box img-circle"><img class="img-circle" src="{{ asset('front/images/resource/team-thumb-1.jpg')}}" alt=""><span class="overlay"></span></figure></div>
                            <div class="thumb-item"><figure class="thumb-box img-circle"><img class="img-circle" src="{{ asset('front/images/resource/team-thumb-1.jpg')}}" alt=""><span class="overlay"></span></figure></div>
                        </div>


                    </div>

                </div>

                <!--Image-column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <figure class="image-box wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('front/images/resource/team-image-1.png')}}" alt=""></figure>
                </div>

            </div>
        </div>
    </section>


@endsection