<!--Start footer area-->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="footer-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('images/logo/logo.png') }}" style="width: 259px; height: 56px;" alt="Logo Image" id="skin-logo-img" /></a>
                    </div>
                    <div class="caption-text">
                        <p>We believe in a firm focus on quality, value for money and unsurpassed customer service. We are here to support you in your health and wellbeing goals, no matter how big or small.</p>
                        {{-- <a class="thm-btn arrow-push-out-right" href="#"><span>Purchase  Now <i class="fa fa-caret-right"></i></span></a> --}}
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <h3 class="title">Quick Links</h3>
                    <ul class="quick-links left">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('cancellation-policy') }}">Cancellation Policy</a></li>
                        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('terms-and-conditions') }}">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <h3 class="title">Contact us</h3>
                    <ul class="contact">
                        <li>
                            <div class="icon-holder">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="text">
                                <p>{{ env('APP_NAME_REF') }},<br>
                                    116 Abbotsbury Road, Morden<br>
                                    London,<br>
                                    United Kingdom,<br>
                                    SM4 5JY</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="text">
                                <p><a href="tel:{{ env('TELEPHONE') }}"> Customer Care: {{ env('TELEPHONE') }}</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a></p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End footer area-->
<!--Start footer bottom area-->
<section class="footer-bottom-area">
    <div class="container ">
        <div class="footer-bottom">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="copy-right">
                        <p>Copyright © 2022 {{ env('APP_NAME_REF') }} are a UK based Company</p>
                    </div>
                </div>
                {{-- <div class="pull-right">
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- /.footer-bottom -->
    </div>
</section>
<!--End footer bottom area-->
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
