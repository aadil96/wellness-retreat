@extends('layouts.app')

@section('title', 'Cancellation Policy')

@section('content')

<style>

    .single-blog-post ul, .single-blog-post li {
        margin: 1rem;
        list-style: disc;
    }
    .single-blog-post ul {
        color: #9e9e9e;
        display: block;
        list-style-type: disc;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
    }

    .single-blog-post li {
        display: list-item;
        text-align: -webkit-match-parent;
    }
</style>

<section class="inner-banner pattern-3" style="margin-top: 1rem;">
    <div class="container text-center">
        <h2>CANCELLATION AND RETURNS POLICY</h2>
    </div>
</section>

<section class="bread-cumb">
    <div class="container text-center">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><span>Cancellation Policy</span></li>
        </ul>
    </div>
</section>

<section class="pt30 single-post-page">
    <div class="container">
        <div class="single-blog-post">

            <div class="content">
                <p>You can cancel an order, seek replacement or exchange of any product ordered or return a product and get a full refund for the same in accordance with this Cancellation and Returns Policy.</p>
                <p>You may initiate a request for replacement, exchange or returns through your account with us online or by sending us an email to that effect at <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a> or by contacting us directly via telephone on the customer service number.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding pt0">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="single-faq-box">
                    <h3>How Do I Seek an Exchange?</h3>
                    <p>If you are not satisfied with the products delivered to youIf you have received any product in a ‘damaged’ condition, you may request for a replacement at no extra cost. Any requests for replacement must be initiated within 30 (thirty) days from the date of receipt of the delivery of the original order.  Replacement of products is subject to availability of stock with us. If the product is out of stock, you will be given the option to either wait till the products are in stock or to receive a full refund for the products., you can request for an exchange. Any requests for exchange of any product ordered and delivered to you must be initiated within 30 (thirty) days from the date of receipt of the delivery of the original order. You are eligible to exchange or substitute the products you ordered for another product of the same or higher value. Delivery charges, at actual will be payable by you for exchanges.</p>
                    <p>Exchange is subject to availability of stock of the products with us. If the product you wish to order for is out of stock, you will be given the option to obtain a full refund for your order.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="single-faq-box">
                    <h3>How do I return a product?</h3>
                    <p>If you are unhappy with your purchase for any reason including change of mind you can return the product to us and wish to obtain a full refund, you may do so, subject to the following terms. You are also given the option of returning only part of your order, where multiple products have been ordered for. We will not be responsible for any products returned to us by mistake.</p>
                    <p>We offer a full refund of the products ordered by you, no questions asked. Any requests for returns must be initiated within 30 (thirty) days from the date of receipt of the delivery of the original order.</p>
                    <p>On receiving a return request from you, we will ensure you get a resolution as fast as possible. The resolution options available to your are a replacement or exchange of the product ordered or a full refund for the products ordered.</p>
                    <p>To return any of our products within 30 (thirty) days of receipt of delivery:</p>
                    <p>Prepare products for return: Please place the products in the original packaging, where available or wrap the products securely using good packaging materials.
                        Write a mailing label and return the products including a copy of the dispatch note:
                        Products should be returned to:</p>
                        <div class="container" style="margin-top: 5rem;">

                            <div class="testimonial-carousel-2-col owl-theme">
                                <div class="item">
                                    <div class="single-testimonial-carousel">
                                        <div class="qoute-icon-box">
                                            <img src="img/resources/qoute-icon.png" alt="Awesome Image" />
                                        </div>
                                        <div class="testimonial-text-box">

                                            <p>{{ env('APP_NAME_REF') }},<br>
                                                116 Abbotsbury Road, Morden<br>
                                                London,<br>
                                                United Kingdom,<br>
                                                SM4 5JY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="single-faq-box">
                    <h3>How do I cancel an order?</h3>
                    <p>If you ordered online then you can cancel your order before the product has been dispatched for shipping. If payment has been received for the order, the entire order amount will be refunded to you.</p>
                    <p>In case the item you have ordered has been shipped but has not yet been delivered to you, you may still cancel the order. Your refund will be processed once we receive the originally ordered product back from the courier.</p>
                    <p>Cancellation requests for a product from your order or the order in entirety can be initiated via email to <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">{{ env('MAIL_FROM_ADDRESS') }}</a> or by contacting customer services on.</p>

                </div>
            </div>

            <div class="col-md-6">
                <div class="single-faq-box">
                    <h3>How long does cancellation of orders take?</h3>
                    <p>If you ordered online then you can cancel your order before the product has been dispatched for shipping. If payment has been received for the order, the entire order amount will be refunded to you.</p>
                    <p>If the Order Status shows the products in your order as “Dispatched”, then if you have not yet received it but we have agreed the refund simply refuse the delivery and as soon as we get the goods back we will process your refund.</p>
                   <p>If you have already accepted the goods then please return them to us at the returns address below and your refund will be processed as soon as we receive the cancelled items back.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="single-faq-box">
                    <h3>How Do I Seek a Replacement?</h3>
                    <p>If you have received any product in a ‘damaged’ condition, you may request for a replacement at no extra cost. Any requests for replacement must be initiated within 30 (thirty) days from the date of receipt of the delivery of the original order.  Replacement of products is subject to availability of stock with us. If the product is out of stock, you will be given the option to either wait till the products are in stock or to receive a full refund for the products.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt30 single-post-page">
    <div class="container">
        <div class="single-blog-post">

            <div class="content">
                <p><strong>Note: </strong> All returns, replacements and exchanges are subject to us receiving your return request within 30 (thirty) days following the day on which you receive the delivery of the product as per the original order.</p>

                <p>To cancel your order please email <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a> and our customer service team will be happy to help you.</p>

                <h3>Refunds:</h3>
                <p>Your refund will be processed soon after we receive the products returned back to us by you.</p>
                <p>Refunds are made back to the same payment mode / account that was originally used to make the transaction and purchase.</p>
                <p>Refunds usually take 14 business days from the time we receive your products.</p>

                <p>You will be refunded delivery charges of the products ordered by you, if:</p>

                <ul>
                    <li>You received an incorrect product</li>
                    <li>You received a damaged or defective product.</li>
                    <li>You are exercising your rights under the Distance Selling Regulations cooling off period.</li>
                </ul>
            </div>
        </div>


    </div>
</section>


@endsection











