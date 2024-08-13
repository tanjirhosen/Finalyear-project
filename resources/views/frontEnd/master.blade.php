<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jul 2023 14:23:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Home-03</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets')}}/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/vendor/slick.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/vendor/sal.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/vendor/base.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/style.min.css">

</head>


<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>

@include('frontEnd.include.header')

@yield('content')


@include('frontEnd.include.footer')


    <!-- Product Quick View Modal Start -->
    <div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="single-product-thumb">
                        <div class="row">
                            <div class="col-lg-7 mb--40">
                                <div class="row">
                                    <div class="col-lg-10 order-lg-2">
                                        <div class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                            <div class="thumbnail">
                                                <img src="{{asset('frontend/assets')}}/images/product/product-big-01.png" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{asset('frontend/assets')}}/images/product/product-big-01.png" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{asset('frontend/assets')}}/images/product/product-big-02.png" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{asset('frontend/assets')}}/images/product/product-big-02.png" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{asset('frontend/assets')}}/images/product/product-big-03.png" alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{asset('frontend/assets')}}/images/product/product-big-03.png" class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 order-lg-1">
                                        <div class="product-small-thumb small-thumb-wrapper">
                                            <div class="small-thumb-img">
                                                <img src="{{asset('frontend/assets')}}/images/product/product-thumb/thumb-08.png" alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="{{asset('frontend/assets')}}/images/product/product-thumb/thumb-07.png" alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="{{asset('frontend/assets')}}/images/product/product-thumb/thumb-09.png" alt="thumb image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 mb--40">
                                <div class="single-product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <div class="star-rating">
                                                <img src="{{asset('frontend/assets')}}/images/icons/rate.png" alt="Rate Images">
                                            </div>
                                            <div class="review-link">
                                                <a href="#">(<span>1</span> customer reviews)</a>
                                            </div>
                                        </div>
                                        <h3 class="product-title">Serif Coffee Table</h3>
                                        <span class="price-amount">$155.00 - $255.00</span>
                                        <ul class="product-meta">
                                            <li><i class="fal fa-check"></i>In stock</li>
                                            <li><i class="fal fa-check"></i>Free delivery available</li>
                                            <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                        </ul>
                                        <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>

                                        <div class="product-variations-wrapper">

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Colors:</h6>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant mt--0">
                                                        <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Product Variation  -->

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Size:</h6>
                                                <ul class="range-variant">
                                                    <li>xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <!-- End Product Variation  -->

                                        </div>

                                        <!-- Start Product Action Wrapper  -->
                                        <div class="product-action-wrapper d-flex-center">
                                            <!-- Start Quentity Action  -->
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                            <!-- End Quentity Action  -->

                                            <!-- Start Product Action  -->
                                            <ul class="product-action d-flex-center mb--0">
                                                <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                            <!-- End Product Action  -->

                                        </div>
                                        <!-- End Product Action Wrapper  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Quick View Modal End -->

    <!-- Header Search Modal End -->
    <div class="header-search-modal" id="header-search-modal">
        <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
        <div class="header-search-wrap">
            <div class="card-header">
                <form action="#">
                    <div class="input-group">
                        <input type="search" class="form-control" name="prod-search" id="prodSearch" placeholder="ewrtwertwer">
                        <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="search-result-header">
                    <h6 class="title"> <span id="searchResultCount">0</span> Result Found</h6>
                    <a href="" class="view-all">View All</a>
                </div>
                <div class="psearch-results" id="searchResult">
                </div>
            </div>
        </div>
    </div>
    <!-- Header Search Modal End -->



    <div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="cart-body">
                <ul class="cart-item-list">
                    @php($sum = 0)
                    @foreach(Cart::content() as $cartProduct)
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="{{ route('product.details',$cartProduct->id) }}">
                                <img src="{{asset($cartProduct->options->image)}}" alt="Commodo Blown Lamp"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h3 class="item-title">
                                <a href="{{ route('product.details',$cartProduct->id) }}">
                                    {{$cartProduct->name}}
                                </a>
                            </h3>
                            <div class="item-price">
                                <span class="currency-symbol"></span>{{$cartProduct->price}} * {{$cartProduct->qty}}</div>
                            <div class=" item-quantity">
                                {{$cartProduct->price * $cartProduct->qty}}
                            </div>
                        </div>
                    </li>
                        @php($sum = $sum + ($cartProduct->price * $cartProduct->qty))
                    @endforeach
                </ul>
            </div>
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">{{$sum}}</span>
                </h3>
                <div class="group-btn">
                    <a href="{{route('cart.show')}}" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="{{route('checkout')}}" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('frontend/assets')}}/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="{{asset('frontend/assets')}}/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('frontend/assets')}}/js/vendor/popper.min.js"></script>
    <script src="{{asset('frontend/assets')}}/js/vendor/bootstrap.min.js"></script>
    <script src="{{asset('frontend/assets')}}/js/vendor/slick.min.js"></script>
    <script src="{{asset('frontend/assets')}}/js/vendor/js.cookie.js"></script>
    <!-- <script src="{{asset('frontend/assets')}}/js/vendor/jquery.style.switcher.js"></script> -->
    <script src="{{asset('frontend/assets')}}/js/vendor/jquery-ui.min.js"></script>
    <script src="{{asset('frontend/assets')}}/js/vendor/jquery.ui.touch-punch.min.js"></script>
    <script src="{{asset('frontend/assets')}}/js/vendor/jquery.countdown.min.js"></script>
    <script src="{{asset('frontend/assets')}}/js/vendor/sal.js"></script>
    <script src="{{asset('frontend/assets')}}/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('frontend/assets')}}/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('frontend/assets')}}/js/vendor/isotope.pkgd.min.js"></script>
    <script src="{{asset('frontend/assets')}}/js/vendor/counterup.js"></script>
    <script src="{{asset('frontend/assets')}}/js/vendor/waypoints.min.js"></script>

    <!-- Main JS -->
    <script src="{{asset('frontend/assets')}}/js/main.js"></script>
{{--    <script>--}}
{{--        var baseURL = {!! json_encode(url('/')) !!}--}}
{{--    </script>--}}
    <script src="{{asset('frontend/assets')}}/js/script.js"></script>

    <script>
        @if(Request::is('/'))
        $( window ).on("load", function (){
            $('#closeCat').show();
        })

        @else

        $( window ).on("load", function (){
            $('#closeCat').hide();
        })

        $( '#openCat' ).on("click", function (){
            $('#closeCat').toggle(500);
        })
        @endif
    </script>

</body>


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jul 2023 14:24:23 GMT -->
</html>
