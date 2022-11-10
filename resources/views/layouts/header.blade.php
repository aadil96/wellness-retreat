<header class="header header-v1 has-over-section stricky dark-header ">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 pull-right">
                    <div class="top-info">
                        <div class="clearfix">
                            <ul class="contact-info pull-left">
                                <li><span><a href="mailto:{{ config('mail.from.address') }}"><i class="fc-icon ftc-icon-email"></i> {{ config('mail.from.address') }}</a></span></li>
                                <li><span><a href="tel:{{ env('TELEPHONE') }}"><i class="fc-icon ftc-icon-phone-contact"></i> Customer Care: {{ env('TELEPHONE') }}</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-wrapper ">
        <div class="container">
            <nav class="navigation clearfix">
                <div id="menuzord" class="menuzord">
                    <a href="{{ route('home') }}" class="menuzord-brand">
                        <img src="{{ asset('images/logo/logo.ico') }}" style="width: 259px; height: 56px;" alt="Logo Image" id="skin-logo-img" />
                    </a>
                    <ul class="menuzord-menu">
                        <li>
                            <a href="{{ route('home') }}" class="flip-flop-btn"><span data-hover="HOME">HOME</span></a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}" class="flip-flop-btn"><span data-hover="Products">Products</span></a>
                        </li>
                        <li>
                            <a href="{{ route('privacy-policy') }}" class="flip-flop-btn"><span data-hover="Privacy Policy">Privacy Policy</span></a>
                        </li>
                        <li>
                            <a href="{{ route('cancellation-policy') }}" class="flip-flop-btn"><span data-hover="Cancellation Policy">Cancellation Policy</span></a>
                        </li>
                        <li>
                            <a href="{{ route('terms-and-conditions') }}" class="flip-flop-btn"><span data-hover="Terms & Conditions">Terms & Conditions</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
