
<!--Main Footer-->
<footer class="main-footer">
    <div class="auto-container">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                <!--Big Column-->
                <div class="big-column col-md-8 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-md-12 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo"><figure><a href="index.html"><img src="images/logo-3.png" alt=""></a></figure></div>
                                <div class="widget-content">
                                    <div class="text">Your Transformation is our passion &amp;  We are your personal trainers, trained nutritionist, your supplement experts, your health coach, your support group We Provide technology ut tools great explorers of the truth, the masters of human happiness need burn fat, build  become your best self.</div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        {{--<div class="footer-column col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<div class="footer-widget links-widget">--}}
                                {{--<h2>Quick Links</h2>--}}
                                {{--<div class="widget-content">--}}
                                    {{--<div class="row clearfix">--}}
                                        {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
                                            {{--<ul class="list">--}}
                                                {{--<li><a href="#">News &amp; Tips</a></li>--}}
                                                {{--<li><a href="#">About Us</a></li>--}}
                                                {{--<li><a href="#">Healthy Food</a></li>--}}
                                                {{--<li><a href="#">Latest Events</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
                                            {{--<ul class="list">--}}
                                                {{--<li><a href="#">Coachers</a></li>--}}
                                                {{--<li><a href="#">Our Shop</a></li>--}}
                                                {{--<li><a href="#">Get Offers</a></li>--}}
                                                {{--<li><a href="#">Contact Us</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="footer-widget tags-widget">--}}
                                {{--<h2>Popular Tags</h2>--}}
                                {{--<div class="widget-content">--}}
                                    {{--<ul class="tags-list">--}}
                                        {{--<li><a href="#">Yoga</a></li>--}}
                                        {{--<li><a href="#">Fitness</a></li>--}}
                                        {{--<li><a href="#">Workouts</a></li>--}}
                                        {{--<li><a href="#">Foods</a></li>--}}
                                        {{--<li><a href="#">Nutrition</a></li>--}}
                                        {{--<li><a href="#">Diet</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}

                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-md-4 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        {{--<div class="footer-column col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<div class="footer-widget posts-widget">--}}
                                {{--<h2>Recent News</h2>--}}
                                {{--<div class="widget-content">--}}
                                    {{--<div class="posts">--}}
                                        {{--<div class="post">--}}
                                            {{--<figure class="post-thumb"><img src="{ asset('front/images/resource/post-thumb-1.jpg')}}" alt=""><a href="#" class="overlay-link"><span class="fa fa-link"></span></a></figure>--}}
                                            {{--<div class="desc-text"><a href="#">Get Tips for Reduce Fat and Cholestrol</a></div>--}}
                                            {{--<div class="time">February 07, 2016</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="post">--}}
                                            {{--<figure class="post-thumb"><img src="{ asset('front/images/resource/post-thumb-2.jpg')}}" alt=""><a href="#" class="overlay-link"><span class="fa fa-link"></span></a></figure>--}}
                                            {{--<div class="desc-text"><a href="#">What is Healthy Food? Get Surprise Answer.</a></div>--}}
                                            {{--<div class="time">January 21, 2016</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="post">--}}
                                            {{--<figure class="post-thumb"><img src="{ asset('front/images/resource/post-thumb-3.jpg')}}" alt=""><a href="#" class="overlay-link"><span class="fa fa-link"></span></a></figure>--}}
                                            {{--<div class="desc-text"><a href="#">Body Maintenance class for Senior Person.</a></div>--}}
                                            {{--<div class="time">December 27, 2015</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <!--Footer Column-->
                        <div class="footer-column col-md-12 col-sm-6 col-xs-12">
                            <div class="footer-widget contact-widget">
                                <h2>Contact Us</h2>
                                <div class="widget-content">
                                    <ul class="contact-info">
                                        @php
                                            $contact=\App\Contact::select('phone','email','address')->first();
                                        @endphp
                                        <li><span class="icon flaticon-telephone-1"></span><strong>Phone:</strong> {{$contact->phone}}</li>
                                        <li><span class="icon flaticon-interface-4"></span><strong>Email:</strong> {{$contact->email}}</li>
                                        <li><span class="icon flaticon-location"></span><strong>Address:</strong> {{$contact->address}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left"><div class="copyright">HealthCoach Theme &copy; 2016 by <a href="https://themeforest.net/user/themekalia/portfolio" class="author-name">ThemeKalia</a></div></div>
                <div class="pull-right">
                    <ul class="footer-social">
                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa  fa-angle-up"></span></div>


<script src="{{asset('front/js/jquery.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('front/js/revolution.min.js')}}"></script>
<script src="{{asset('front/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('front/js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('front/js/owl.js')}}"></script>
<script src="{{asset('front/js/wow.js')}}"></script>
<script src="{{asset('front/js/script.js')}}"></script>
</body>

<!-- Mirrored from world5.commonsupport.com/html2/health-coach/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Mar 2018 10:50:45 GMT -->
</html>