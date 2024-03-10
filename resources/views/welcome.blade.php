@extends('frontend.main_master')
@section('content')

<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
           
            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        <div class="item" style="background-image: url(public/frontend/assets/images/sliders/01.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">HONDA CBR</div>
                                    <div class="big-text fadeInDown-1"><span class="highlight">BLACK</span> HORSE</div>
                                    <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                                    <div class="button-holder fadeInDown-3"></div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                        <div class="item" style="background-image: url(public/frontend/assets/images/sliders/02.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">HONDA CBR</div>
                                    <div class="big-text fadeInDown-1"><span class="highlight">RED</span> HORSE </div>
                                    <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                                    <div class="button-holder fadeInDown-3"></div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                    </div>
                    <!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->

               
                <!-- ============================================== SCROLL TABS ============================================== -->
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">New Products</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                            <li><a data-transition-type="backSlide" href="#CD125_T_Benly" data-toggle="tab">CD125 T Benly</a></li>
                            <li><a data-transition-type="backSlide" href="#CD125_T_Twin" data-toggle="tab">CD125 T Twin</a></li>
                            <li><a data-transition-type="backSlide" href="#CD185_RM" data-toggle="tab">CD 185 Road Master</a></li>
                            <li><a data-transition-type="backSlide" href="#CD200_RM" data-toggle="tab">CD 200 Road Master</a></li>
                        </ul>
                        <!-- /.nav-tabs -->
                    </div>
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/1.jpeg')}}" alt=""></a> </div>
                                                    <div class="tag new"><span>free</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html"><b>Honda CD 125 T Benly</b></a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed(OD)<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 124.00 cc<br/>
<b>Fuel capacity:</b> 10 litres (2.64 gallons)<br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/2.jpeg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html"><b>Honda CD 125 T Twin</b></a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 124.00 cc<br/>
<b>Fuel capacity:</b> 10 litres (2.64 gallons)<br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/3.jpeg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html"><b>Honda CD 185 Road Master</b></a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/4.jpeg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                               <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html"><b>Honda CD 200 Road Master</b></a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/5.jpeg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html"><b>Model Honda CM 125 T</b></a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 124.00 cc<br/>
<b>Fuel capacity:</b> 12.5 litres<br/>
<b>Dry weight:</b> 140 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/6.jpeg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html"><b>Honda CD 125 T Twin</b></a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 124.00 cc<br/>
<b>Fuel capacity:</b> 10 litres (2.64 gallons)<br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="CD125_Benly">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p5.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 125 T Benly</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description">
                                                        <p></p><b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed(OD)<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Engine type:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 124.00cc<br/>
<b>Fuel capacity:</b> 10 litres(2.64 gallons)<br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p6.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Benly 125</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p7.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Benly 125</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p8.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Benly 125</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p9.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Benly 125</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p10.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Benly 125</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="CD125_T_Benly">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p11.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 125 T Benly</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model: Honda CD 125 T Benly</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed(OD)<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 124.00 cc<br/>
<b>Fuel capacity:</b> 10 litres (2.64 gallons)<br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p12.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 125 T Benly</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model: Honda CD 125 T Benly</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed(OD)<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 124.00 cc<br/>
<b>Fuel capacity:</b> 10 litres (2.64 gallons)<br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p13.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 125 T Benly</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model: Honda CD 125 T Benly</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed(OD)<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 124.00 cc<br/>
<b>Fuel capacity:</b> 10 litres (2.64 gallons)<br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p14.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 125 T Benly</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model: Honda CD 125 T Benly</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed(OD)<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 124.00 cc<br/>
<b>Fuel capacity:</b> 10 litres (2.64 gallons)<br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p15.jpg')}}" alt="image"></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 125 T Benly</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model: Honda CD 125 T Benly</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed(OD)<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 124.00 cc<br/>
<b>Fuel capacity:</b> 10 litres (2.64 gallons)<br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                    </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->
 <div class="tab-pane" id="CD125_T_Twin">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p16.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 125 T Twin</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model Honda CD 125 T Twin</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 124.00 cc<br/>
<b>Fuel capacity:</b> 10 litres (2.64 gallons)<br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="CD185_RM">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p18.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 185 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>Model Honda CD 185 Road Master<br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p18.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 185 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>Model Honda CD 185 Road Master<br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p17.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 185 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>Model Honda CD 185 Road Master<br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p16.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                               <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 185 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>Model Honda CD 185 Road Master<br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p13.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 185 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>Model Honda CD 185 Road Master<br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p14.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 185 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p>Model Honda CD 185 Road Master<br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->
<div class="tab-pane" id="CD200_RM">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p18.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 200 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model Honda CD 200 Road Master</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p18.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 200 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model Honda CD 200 Road Master</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p17.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag sale"><span>sale</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 200 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model Honda CD 200 Road Master</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p16.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 200 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model Honda CD 200 Road Master</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p13.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 200 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model Honda CD 200 Road Master</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/p14.jpg')}}" alt=""></a> </div>
                                                    <!-- /.image -->

                                                    <div class="tag hot"><span>hot</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a href="detail.html">Honda CD 200 Road Master</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"><p><b><i>Model Honda CD 200 Road Master</i></b><br/>
<b>Engine Operation:</b> 4 stroke<br/>
<b>Gearbox:</b> 4 and 5-speed<br/>
<b>Starting Method:</b> Self Starter / Kick Starter<br/>
<b>Fuel system:</b> Carburettor<br/>
<b>Fuel system:</b> Twin, four-stroke<br/>
<b>Capacity:</b> 184.00 cc<br/>
<b>Fuel capacity:</b> 10 litres <br/>
<b>Dry weight:</b> 133.0 kg</p></div>
                                                    <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.scroll-tabs -->
                <!-- ============================================== SCROLL TABS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="{{asset('public/frontend/assets/images/banners/home-banner1.jpg')}}" alt=""> </div>
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-5 col-sm-5">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="{{asset('public/frontend/assets/images/banners/home-banner_2.jpg')}}" alt=""> </div>
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.wide-banners -->

              <!-- ============================================== BEST SELLER ============================================== -->

                <div class="best-deal wow fadeInUp outer-bottom-xs">
                    <h3 class="section-title">Best seller</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="#"> <img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Benly 125</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> </div> -->
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="#"> <img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Benly 125</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> </div> -->
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="#"> <img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Benly 125</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> </div> -->
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="#"> <img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Benly 125</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> </div> -->
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="#"> <img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Benly 125</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> </div> -->
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="#"> <img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Benly 125</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> </div> -->
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="#"> <img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Benly 125</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> </div> -->
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="#"> <img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Benly 125</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> </div> -->
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== BEST SELLER : END ============================================== -->

                <!-- ============================================== BLOG SLIDER ============================================== -->
                <section class="section latest-blog outer-bottom-vs wow fadeInUp">
                    <h3 class="section-title">latest from blog</h3>
                    <div class="blog-slider-container outer-top-xs">
                        <div class="owl-carousel blog-slider custom-carousel">
                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image"> <a href="blog.html"><img src="{{asset('public/frontend/assets/images/blog-post/benly.jpg')}}" alt=""></a> </div>
                                    </div>
                                    <!-- /.blog-post-image -->

                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
                                        <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                                        <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        <a href="#" class="lnk btn btn-primary">Read more</a>
                                    </div>
                                    <!-- /.blog-post-info -->

                                </div>
                                <!-- /.blog-post -->
                            </div>
                            <!-- /.item -->

                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image"> <a href="blog.html"><img src="{{asset('public/frontend/assets/images/blog-post/benly.jpg')}}" alt=""></a> </div>
                                    </div>
                                    <!-- /.blog-post-image -->

                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                                        <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                        <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        <a href="#" class="lnk btn btn-primary">Read more</a>
                                    </div>
                                    <!-- /.blog-post-info -->

                                </div>
                                <!-- /.blog-post -->
                            </div>
                            <!-- /.item -->

                            <!-- /.item -->

                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image"> <a href="blog.html"><img src="{{asset('public/frontend/assets/images/blog-post/benly.jpg')}}" alt=""></a> </div>
                                    </div>
                                    <!-- /.blog-post-image -->

                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                                        <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read more</a>
                                    </div>
                                    <!-- /.blog-post-info -->

                                </div>
                                <!-- /.blog-post -->
                            </div>
                            <!-- /.item -->

                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image"> <a href="blog.html"><img src="{{asset('public/frontend/assets/images/blog-post/benly.jpg')}}" alt=""></a> </div>
                                    </div>
                                    <!-- /.blog-post-image -->

                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                                        <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read more</a>
                                    </div>
                                    <!-- /.blog-post-info -->

                                </div>
                                <!-- /.blog-post -->
                            </div>
                            <!-- /.item -->

                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image"> <a href="blog.html"><img src="{{asset('public/frontend/assets/images/blog-post/benly.jpg')}}" alt=""></a> </div>
                                    </div>
                                    <!-- /.blog-post-image -->

                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                                        <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                        <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                        <a href="#" class="lnk btn btn-primary">Read more</a>
                                    </div>
                                    <!-- /.blog-post-info -->

                                </div>
                                <!-- /.blog-post -->
                            </div>
                            <!-- /.item -->

                        </div>
                        <!-- /.owl-carousel -->
                    </div>
                    <!-- /.blog-slider-container -->
                </section>
                <!-- /.section -->
                <!-- ============================================== BLOG SLIDER : END ============================================== -->

                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <section class="section wow fadeInUp new-arriavls">
                    <h3 class="section-title">New Arrivals</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""></a> </div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Benly 125</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""></a> </div>
                                        <!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Benly 125</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""></a> </div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Benly 125</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""></a> </div>
                                        <!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Benly 125</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""></a> </div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Benly 125</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a href="detail.html"><img src="{{asset('public/frontend/assets/images/products/benly.jpg')}}" alt=""></a> </div>
                                        <!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Benly 125</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

            </div>
            <!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div>
        <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->

        <!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
@endsection