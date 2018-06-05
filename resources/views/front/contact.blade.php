@extends('front.master')
@section('content')
<section class="page-title" style="background-image:url(front/images/background/bg-page-title-1.jpg);">
    <div class="auto-container">
        <h1>Contact</h1>
        <h3 class="styled-font">We Offer healthier lifestyle.</h3>
    </div>
</section>

<!--Page Info-->
<section class="page-info">
    <div class="auto-container clearfix">
        <div class="breadcrumb-outer">
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</section>


<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Form Column -->
            <div class="column form-column pull-right col-lg-6 col-md-12 col-sm-12 col-xs-12">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <div class="sec-title"><h2>Send Us Message</h2><div class="separator"></div></div>
                <!--form-box-->
                <div class="form-box default-form">
                    <div class="contact-form default-form">
                        <form method="post" action="{{route('message.store')}}" id="contact-form">
                            {{csrf_field()}}
                            <div class="row clearfix">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" placeholder="Your Name *" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="mail"  placeholder="Your Mail *" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="phone"  placeholder="Phone Number">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="message" placeholder="Message *"></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="theme-btn btn-style-one">Submit now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Column-->
            <div class="column info-column pull-left col-lg-6 col-md-8 col-sm-12 col-xs-12">
                <div class="sec-title"><h2>Get In Touch</h2><div class="separator"></div></div>
                <!--Info Tabs-->
                <div class="tabs-box info-tabs">
                    <!--Tab Buttons-->
                    <ul class="tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#info-tab-3">Jacksonville</li>
                    </ul>
                        <!--Tab-->
                        <div class="tab active-tab" id="info-tab-3">
                            <div class="desc-text">How all this mistaken idea of denouncing pleasure and praising pain was born and we will you complete system.</div>
                            <h3 class="location-title">Jacksonville :</h3>
                            <div class="info-style-one">
                                <ul>
                                    <li><div class="icon-box"><span class="fa fa-globe"></span></div><h4>Address :</h4><div class="text">{{$contact->address}}</div></li>
                                    <li><div class="icon-box"><span class="flaticon-envelope"></span></div><h4>Ask Some Thing Us :</h4><div class="text">{{$contact->email}}</div></li>
                                    <li><div class="icon-box"><span class="flaticon-technology-1"></span></div><h4>Call Us:</h4><div class="text">{{$contact->phone}}</div></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div><!--End Info Tabs-->

            </div>

        </div>
    </div>
</section>


<!--Map Section-->
<section class="map-section">
    <div class="map-outer">

        <!--Map Canvas-->
        <div class="map-canvas"
             data-zoom="10"
             data-lat="23.815811"
             data-lng="90.412580"
             data-type="roadmap"
             data-hue="#fc721e"
             data-title="Dhaka"
             data-content="Dhaka 1000-1200, Bangladesh<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"
             style="height:480px;">
        </div>

    </div>
</section>

@endsection