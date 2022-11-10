@extends('layouts.app')

@section('title', 'Products')

@section('content')

<style>
    .info-box {
        margin-top: 3rem;
    }

    .info > p > span {
        color: #A6C311 !important;
        margin-right: 1rem;
    }

</style>

<section class="inner-banner pattern-3" style="margin-top: 1rem;">
    <div class="container text-center">
        <h2>Products</h2>
    </div>
</section>

<section class="bread-cumb">
    <div class="container text-center">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('products') }}">Products</a></li>
            <li><span>Product Detail</span></li>
        </ul>
    </div>
</section>

<section class="sidebar-pages popular-shop-item">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="sidebar-page-content section-padding pb0">
                    <div class="inner-page-wrapper section-padding pt0 white-bg">
                        <div class="product-content-box clearfix">
                            <div class="img-box">
                                <div class="single-product-carousel-content-box owl-theme owl-carousel">
                                    <div class="item">
                                        <img src="{{ asset('images/products/'.$product->slug.'.jpeg')}}" alt="Awesome Image" />
                                    </div>
                                    <!-- /.item -->
                                    <div class="item">
                                        <img src="{{ asset('images/products/'.$product->slug.'-direction.jpeg')}}" alt="Awesome Image" />
                                    </div>
                                    <!-- /.item -->
                                    <div class="item">
                                        <img src="{{ asset('images/products/'.$product->slug.'-ingredients.jpeg')}}" alt="Awesome Image" />
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.single-product-carousel-content-box owl-theme-owl-carousel -->
                                <div class="single-product-carousel-thumbnail-box owl-theme owl-carousel">

                                    <div class="item">
                                        <img src="{{ asset('images/products/'.$product->slug.'.jpeg')}}" alt="Awesome Image" />
                                    </div>

                                    <div class="item">
                                        <img src="{{ asset('images/products/'.$product->slug.'-direction.jpeg')}}" alt="Awesome Image" />
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/products/'.$product->slug.'-ingredients.jpeg')}}" alt="Awesome Image" />
                                    </div>
                                </div>
                                <!-- /.single-product-carousel-thumbnail-box owl-theme owl-carousel -->
                            </div>
                            <div class="content-box">
                                <h2>{{ $product->name }}</h2>

                                <div class="info-box">
                                    <div class='info'>
                                        <p><span>Ingredients: </span></p>
                                        <p>{{ $product->ingredients }}</p>
                                    </div>

                                    <div class='info'>
                                        <p><span>Nutritional info: </span></p>
                                        <p>{{ $product->nutritional_info }}</p>
                                    </div>

                                    <p><strong>Suitable for vegetarians and vegans.</strong></p>
                                    <br>
                                    <p><strong>Please  <a href="tel:{{ env('TELEPHONE') }}">call us</a> to place an order.</strong></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
