@extends('layouts.app')
@section('content')

    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="random">
                    <img src="{{ asset('img/slides/1-1.jpg') }}" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                    <div class="tp-caption tp-resizeme banner-caption-h1" data-x="center" data-hoffset="0" data-y="top" data-voffset="385" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="500">
                        Encouraging you to lead a healthy
                    </div>
                    <div class="tp-caption  tp-resizeme banner-caption-h1" data-x="center" data-hoffset="0" data-y="top" data-voffset="480" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1500">
                        and active lifestyle.
                    </div>
                    <div class="tp-caption tp-resizeme banner-caption-h1-large banner-caption-bg" data-x="center" data-hoffset="0" data-y="top" data-voffset="570" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2000">
                        <span><img src="{{ asset('img/slides/title-decor.png') }}" alt=""> {{ env('APP_NAME') }}</span>
                    </div>
                </li>
                <li data-transition="random">
                    <img src="img/slides/1-3.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2">
                    <div class="tp-caption tp-resizeme banner-caption-h1" data-x="right" data-hoffset="0" data-y="top" data-voffset="385" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="500">
                        Encouraging you to lead a healthy
                    </div>
                    <div class="tp-caption  tp-resizeme banner-caption-h1" data-x="right" data-hoffset="0" data-y="top" data-voffset="480" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1000">
                        and active lifestyle.
                    </div>
                    <div class="tp-caption  tp-resizeme banner-caption-h1-large banner-caption-bg" data-x="right" data-hoffset="15" data-y="top" data-voffset="570" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1500">
                        <span><img src="{{ asset('img/slides/title-decor.png') }}" alt=""> Don't Miss it</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="workout-schedules-area">
        <div class="container">
            <div class="section-title">
                <h1><span>Our Products</span></h1>
            </div>
            <div class="row">

                @forelse ($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="single-item">
                            <div class="img-holder">
                                <img alt="" src="{{ asset('images/products/'.$product->slug.'.jpeg') }}">
                                <div class="overlay">
                                    <div class="icon-holder">
                                        <a href="{{ route('product-detail', ['slug' => $product->slug]) }}"><i class="fa fa-share"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse

            </div>
        </div>
    </section>

@endsection
