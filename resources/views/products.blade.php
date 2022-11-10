@extends('layouts.app')

@section('title', 'Products')

@section('content')

<section class="inner-banner pattern-3" style="margin-top: 1rem;">
    <div class="container text-center">
        <h2>Products</h2>
    </div>
</section>

<section class="bread-cumb">
    <div class="container text-center">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><span>Products</span></li>
        </ul>
    </div>
</section>

<section class="popular-shop-item  section-padding">
    <div class="container">
        
        <div class="row">
            @forelse ($products as $product)
            <div class="col-md-4 col-sm-6 ">
                <div class="single-product-item text-center">
                    <div class="img-holder">
                        <a href="{{ route('product-detail', ['slug' => $product->slug]) }}"><img alt="" src="{{ asset('images/products/'.$product->slug.'.jpeg') }}"></a>
                    </div>
                    <div class="title">
                        <a href="{{ route('product-detail', ['slug' => $product->slug]) }}"><h3>{{ $product->name }} </h3></a>
                    </div>
                </div>
            </div>   
            @empty
                
            @endforelse        
        </div>
    </div>
    <!-- /.container -->
</section>
@endsection