@extends('frontEnd.master')
@section('content')
    <main class="main-wrapper">

    <!-- Start Slider Area -->
    <div class="axil-main-slider-area main-slider-style-2">
        <div class="container">
            <div class="slider-offset-left">
                <div class="row row--20">
                    <div class="col-lg-9">
                        <div class="slider-box-wrap">
                            <div class="slider-activation-one axil-slick-dots">
                                <div class="single-slide slick-slide">
                                    <div class="main-slider-content">
                                        <span class="subtitle"><i class="fal fa-watch"></i> Smartwatch</span>
                                        <h1 class="title">Bloosom Smat Watch</h1>
                                        <div class="shop-btn">
                                            <a href="shop.html" class="axil-btn">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="main-slider-thumb">
                                        <img src="{{asset('frontend/assets')}}/images/product/product-40.png" alt="Product">
                                    </div>
                                </div>
                                <div class="single-slide slick-slide">
                                    <div class="main-slider-content">
                                        <span class="subtitle"><i class="fal fa-watch"></i> Smartwatch</span>
                                        <h1 class="title">Delux Brand Watch</h1>
                                        <div class="shop-btn">
                                            <a href="shop.html" class="axil-btn">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="main-slider-thumb">
                                        <img src="{{asset('frontend/assets')}}/images/product/product-46.png" alt="Product">
                                    </div>
                                </div>
                                <div class="single-slide slick-slide">
                                    <div class="main-slider-content">
                                        <span class="subtitle"><i class="fal fa-watch"></i> Smartwatch</span>
                                        <h1 class="title">Bloosom Smat Watch</h1>
                                        <div class="shop-btn">
                                            <a href="shop.html" class="axil-btn">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="main-slider-thumb">
                                        <img src="{{asset('frontend/assets')}}/images/product/product-40.png" alt="Product">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="slider-product-box">
                            <div class="product-thumb">
                                <a href="single-product.html">
                                    <img src="{{asset('frontend/assets')}}/images/product/product-41.png" alt="Product">
                                </a>
                            </div>
                            <h6 class="title"><a href="single-product.html">Yantiti Leather Bags</a></h6>
                            <span class="price">$29.99</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box">
                        <div class="icon">
                            <img src="{{asset('frontend/assets')}}/images/icons/service1.png" alt="Service">
                        </div>
                        <h6 class="title">Fast &amp; Secure Delivery</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box">
                        <div class="icon">
                            <img src="{{asset('frontend/assets')}}/images/icons/service2.png" alt="Service">
                        </div>
                        <h6 class="title">100% Guarantee On Product</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box">
                        <div class="icon">
                            <img src="{{asset('frontend/assets')}}/images/icons/service3.png" alt="Service">
                        </div>
                        <h6 class="title">24 Hour Return Policy</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box">
                        <div class="icon">
                            <img src="{{asset('frontend/assets')}}/images/icons/service4.png" alt="Service">
                        </div>
                        <h6 class="title">24 Hour Return Policy</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box">
                        <div class="icon">
                            <img src="{{asset('frontend/assets')}}/images/icons/service5.png" alt="Service">
                        </div>
                        <h6 class="title">Next Level Pro Quality</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start New Arrivals Product Area  -->
    <div class="axil-new-arrivals-product-area fullwidth-container bg-color-white axil-section-gap pb--0">
        <div class="container ml--xxl-0">
            <div class="product-area pb--50">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> This Week’s</span>
                    <h2 class="title">New Arrivals</h2>
                </div>
                <div class="new-arrivals-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                   @foreach($new_arrival_products as $new_arrival_product)
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-four">
                            <div class="thumbnail">
                                <a href="{{route('product.details',$new_arrival_product->id)}}" target="_blank">
                                    <img data-sal="fade" style="height: 300px" data-sal-delay="100" data-sal-duration="1500" src="{{asset($new_arrival_product->image)}}" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    @php($off = (($new_arrival_product->regular_price - $new_arrival_product->selling_price)/$new_arrival_product->regular_price) * 100)
                                    <div class="product-badget">{{ceil($off)}}% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="{{route('cart.direct-add', ['id' => $new_arrival_product->id])}}">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title">
                                        <a href="{{route('product.details',$new_arrival_product->id)}}" target="_blank">{{$new_arrival_product->name}}</a>
                                    </h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">&#2547;{{number_format($new_arrival_product->selling_price)}}</span>
                                        <span class="price old-price">{{number_format($new_arrival_product->regular_price)}}</span>

                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End New Arrivals Product Area  -->

  
    <!-- End  New Arrivals Product Area  -->

    <!-- Poster Countdown Area  -->
    <div class="axil-poster-countdown">
        <div class="container">
            <div class="poster-countdown-wrap bg-lighter">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="poster-countdown-content">
                            <div class="section-title-wrapper">
                                <span class="title-highlighter highlighter-secondary"> <i class="far fa-shopping-basket"></i> Don’t Miss!!</span>
                                <h2 class="title">Let's Shopping Today</h2>
                            </div>
                            <div class="poster-countdown countdown mb--40"></div>
                            <a href="#" class="axil-btn btn-bg-primary">Check it Out!</a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="poster-countdown-thumbnail">
                            <img src="{{asset('frontend/assets')}}/images/product/poster/poster-05.png" alt="Poster Product">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Poster Countdown Area  -->

    <!-- Start Expolre Product Area  -->
    <div class="axil-product-area bg-color-white axil-section-gap">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our Products</span>
                <h2 class="title">Explore our Products</h2>
            </div>
            <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                <div class="slick-single-layout">
                    <div class="row row--15">

                        @foreach($explore_products as $explore_product)
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="{{route('product.details',$explore_product->id)}}" target="_blank">
                                        <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="{{asset($explore_product->image)}}" alt="Product Images">
                                    </a>
                                    <div class="label-block label-right">
                                        @php($off = (($explore_product->regular_price - $explore_product->selling_price)/$explore_product->regular_price) * 100)
                                        <div class="product-badget">{{ceil($off)}}% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title">
                                            <a href="{{route('product.details',$explore_product->id)}}">{{$explore_product->name}}</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">&#2547;{{number_format($explore_product->selling_price)}}</span>
                                            <span class="price old-price">{{number_format($explore_product->regular_price)}}</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center  mt_sm--0">
                    <a href="{{route('products')}}" class="btn btn-outline-primary btn-lg">View All Products</a>
                </div>
            </div>

        </div>
    </div>
    <!-- End Expolre Product Area  -->

    <!-- Start Testimonila Area  -->
    <div class="axil-testimoial-area axil-section-gap bg-vista-white">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-secondary"> <i class="fal fa-quote-left"></i>Testimonials</span>
                <h2 class="title">Users Feedback</h2>
            </div>
            <!-- End .section-title -->
            <div class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>“ It’s amazing how much easier it has been to
                            meet new people and create instantly non
                            connections. I have the exact same personal
                            the only thing that has changed is my mind
                            set and a few behaviors. “</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets')}}/images/testimonial/image-1.png" alt="testimonial image">
                        </div>
                        <div class="media-body">
                            <span class="designation">Head Of Idea</span>
                            <h6 class="title">James C. Anderson</h6>
                        </div>
                    </div>
                    <!-- End .thumbnail -->
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>“ It’s amazing how much easier it has been to
                            meet new people and create instantly non
                            connections. I have the exact same personal
                            the only thing that has changed is my mind
                            set and a few behaviors. “</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets')}}/images/testimonial/image-2.png" alt="testimonial image">
                        </div>
                        <div class="media-body">
                            <span class="designation">Head Of Idea</span>
                            <h6 class="title">James C. Anderson</h6>
                        </div>
                    </div>
                    <!-- End .thumbnail -->
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>“ It’s amazing how much easier it has been to
                            meet new people and create instantly non
                            connections. I have the exact same personal
                            the only thing that has changed is my mind
                            set and a few behaviors. “</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets')}}/images/testimonial/image-3.png" alt="testimonial image">
                        </div>
                        <div class="media-body">
                            <span class="designation">Head Of Idea</span>
                            <h6 class="title">James C. Anderson</h6>
                        </div>
                    </div>
                    <!-- End .thumbnail -->
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>“ It’s amazing how much easier it has been to
                            meet new people and create instantly non
                            connections. I have the exact same personal
                            the only thing that has changed is my mind
                            set and a few behaviors. “</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets')}}/images/testimonial/image-2.png" alt="testimonial image">
                        </div>
                        <div class="media-body">
                            <span class="designation">Head Of Idea</span>
                            <h6 class="title">James C. Anderson</h6>
                        </div>
                    </div>
                    <!-- End .thumbnail -->
                </div>
                <!-- End .slick-single-layout -->

            </div>
        </div>
    </div>
    <!-- End Testimonila Area  -->


    <!-- Start Axil Newsletter Area  -->
    <div class="axil-newsletter-area axil-section-gap pt--0">
        <div class="container">
            <div class="etrade-newsletter-wrapper bg_image bg_image--12">
                <div class="newsletter-content">
                    <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                    <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                    <div class="input-group newsletter-form">
                        <div class="position-relative newsletter-inner mb--15">
                            <input placeholder="example@gmail.com" type="text">
                        </div>
                        <button type="submit" class="axil-btn mb--15">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    </main>
@endsection
