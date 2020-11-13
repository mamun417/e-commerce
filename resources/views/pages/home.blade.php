@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('components.home.banner')
    <!-- Characteristics -->
    <div class="characteristics">
        <div class="container">
            <div class="row">

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('frontend/images/char_1.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('frontend/images/char_2.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('frontend/images/char_3.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('frontend/images/char_4.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals of the week -->
    @include('components.home.hot-deal')

    <!-- Popular Categories -->
    @include('components.home.popular-category')

    <!-- Banner -->
    <div class="banner_2">
        <div class="banner_2_background"
             style="background-image:url({{ asset('frontend/images/banner_2_background.jpg')}})"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>

            <!-- Banner 2 Slider -->
            @include('components.home.mid-slider')
        </div>
    </div>

    <!-- Hot New Arrivals -->
    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Hot New Arrivals</div>
                            <ul class="clearfix">
                                <li class="active">Featured</li>
                                <li>Audio & Video</li>
                                <li>Laptops & Computers</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_1.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Astro M2 Black</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_2.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Transcend T.Sonic</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button active">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_3.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Xiaomi Band 2...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_4.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Rapoo T8 White</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_5.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Philips BT6900A</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_6.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Nokia 3310(2017)...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_7.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Rapoo 7100p Gray</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_8.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Canon EF</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_1.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Gembird SPK-103</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_2.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Canon IXUS 175...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_3.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_4.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_5.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_6.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_7.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_8.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->
                                <div class="product_panel panel">
                                    <div class="arrivals_slider slider">

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_1.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_2.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button active">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_3.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_4.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_5.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_6.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_7.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_8.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_1.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_2.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_3.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_4.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_5.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_6.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_7.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_8.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->
                                <div class="product_panel panel">
                                    <div class="arrivals_slider slider">

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_1.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_2.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button active">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_3.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_4.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_5.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_6.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_7.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_8.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_1.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_2.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_3.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_4.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_5.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img
                                                        src="{{ asset('frontend/images/new_6.jpg') }}"
                                                        alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_7.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ asset('frontend/images/new_8.jpg')}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                            </div>

                            <div class="col-lg-3">
                                <div class="arrivals_single clearfix">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div class="arrivals_single_image"><img
                                                src="{{ asset('frontend/images/new_single.png')}}" alt=""></div>
                                        <div class="arrivals_single_content">
                                            <div class="arrivals_single_category"><a href="#">Smartphones</a></div>
                                            <div class="arrivals_single_name_container clearfix">
                                                <div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
                                                <div class="arrivals_single_price text-right">$379</div>
                                            </div>
                                            <div class="rating_r rating_r_4 arrivals_single_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <form action="#">
                                                <button class="arrivals_single_button">Add to Cart</button>
                                            </form>
                                        </div>
                                        <div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i>
                                        </div>
                                        <ul class="arrivals_single_marks product_marks">
                                            <li class="arrivals_single_mark product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Best Sellers -->
    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Hot Best Sellers</div>
                            <ul class="clearfix">
                                <li class="active">Top 20</li>
                                <li>Audio & Video</li>
                                <li>Laptops & Computers</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <div class="bestsellers_panel panel active">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_1.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_2.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Samsung J730F...</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_3.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Nomi Black White</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_4.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Samsung Charm Gold</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_5.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Beoplay H7</a></div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_6.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Huawei MediaPad T3</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_1.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_2.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_3.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_4.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_5.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_6.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="bestsellers_panel panel">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_1.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_2.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_3.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_4.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_5.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_6.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_1.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_2.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_3.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_4.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_5.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_6.png')}}"
                                                alt="">
                                        </div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="bestsellers_panel panel">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_1.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_2.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_3.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_4.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_5.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_6.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_1.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_2.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_3.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_4.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item discount">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_5.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                                <!-- Best Sellers Item -->
                                <div class="bestsellers_item">
                                    <div
                                        class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="bestsellers_image"><img
                                                src="{{ asset('frontend/images/best_6.png')}}"
                                                alt=""></div>
                                        <div class="bestsellers_content">
                                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                            <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a>
                                            </div>
                                            <div class="rating_r rating_r_4 bestsellers_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="bestsellers_price discount">$225<span>$300</span></div>
                                        </div>
                                    </div>
                                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="bestsellers_marks">
                                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                        <li class="bestsellers_mark bestsellers_new">new</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Adverts -->
    <div class="adverts">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 advert_col">

                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">Trends 2018</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
                        </div>
                        <div class="ml-auto">
                            <div class="advert_image"><img src="{{ asset('frontend/images/adv_1.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 advert_col">

                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_subtitle">Trends 2018</div>
                            <div class="advert_title_2"><a href="#">Sale -45%</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                        </div>
                        <div class="ml-auto">
                            <div class="advert_image"><img src="{{ asset('frontend/images/adv_2.png')}}" alt=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 advert_col">

                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">Trends 2018</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                        </div>
                        <div class="ml-auto">
                            <div class="advert_image"><img src="{{ asset('frontend/images/adv_3.png')}}" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Trends -->
    <div class="trends">
        <div class="trends_background"
             style="background-image:url({{ asset('frontend/images/trends_background.jpg')}})"></div>
        <div class="trends_overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Trends Content -->
                <div class="col-lg-3">
                    <div class="trends_container">
                        <h2 class="trends_title">Trends 2018</h2>
                        <div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p>
                        </div>
                        <div class="trends_slider_nav">
                            <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Trends Slider -->
                <div class="col-lg-9">
                    <div class="trends_slider_container">

                        <!-- Trends Slider -->

                        <div class="owl-carousel owl-theme trends_slider">

                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div
                                        class="trends_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/images/trends_1.jpg')}}" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">Jump White</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item">
                                    <div
                                        class="trends_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/images/trends_2.jpg')}}" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">Samsung Charm...</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div
                                        class="trends_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/images/trends_3.jpg')}}" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">DJI Phantom 3...</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div
                                        class="trends_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/images/trends_1.jpg')}}" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">Jump White</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item">
                                    <div
                                        class="trends_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/images/trends_2.jpg')}}" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">Jump White</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div
                                        class="trends_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset('frontend/images/trends_3.jpg')}}" alt=""></div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a href="#">Smartphones</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="product.html">Jump White</a></div>
                                            <div class="trends_price">$379</div>
                                        </div>
                                    </div>
                                    <ul class="trends_marks">
                                        <li class="trends_mark trends_discount">-25%</li>
                                        <li class="trends_mark trends_new">new</li>
                                    </ul>
                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Reviews -->
    <div class="reviews">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="reviews_title_container">
                        <h3 class="reviews_title">Latest Reviews</h3>
                        <div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
                    </div>

                    <div class="reviews_slider_container">

                        <!-- Reviews Slider -->
                        <div class="owl-carousel owl-theme reviews_slider">

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="review_image"><img src="{{ asset('frontend/images/review_1.jpg')}}"
                                                                       alt=""></div>
                                    </div>
                                    <div class="review_content">
                                        <div class="review_name">Roberto Sanchez</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.
                                                Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="review_image"><img src="{{ asset('frontend/images/review_2.jpg')}}"
                                                                       alt=""></div>
                                    </div>
                                    <div class="review_content">
                                        <div class="review_name">Brandon Flowers</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.
                                                Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="review_image"><img src="{{ asset('frontend/images/review_3.jpg')}}"
                                                                       alt=""></div>
                                    </div>
                                    <div class="review_content">
                                        <div class="review_name">Emilia Clarke</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.
                                                Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="review_image"><img src="{{ asset('frontend/images/review_1.jpg')}}"
                                                                       alt=""></div>
                                    </div>
                                    <div class="review_content">
                                        <div class="review_name">Roberto Sanchez</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.
                                                Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="review_image"><img src="{{ asset('frontend/images/review_2.jpg')}}"
                                                                       alt=""></div>
                                    </div>
                                    <div class="review_content">
                                        <div class="review_name">Brandon Flowers</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.
                                                Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="review_image"><img src="{{ asset('frontend/images/review_3.jpg')}}"
                                                                       alt=""></div>
                                    </div>
                                    <div class="review_content">
                                        <div class="review_name">Emilia Clarke</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.
                                                Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="reviews_dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recently Viewed -->
    <div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="viewed_title_container">
                        <h3 class="viewed_title">Recently Viewed</h3>
                        <div class="viewed_nav_container">
                            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="viewed_slider_container">

                        <!-- Recently Viewed Slider -->

                        <div class="owl-carousel owl-theme viewed_slider">

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('frontend/images/view_1.jpg')}}"
                                                                   alt="">
                                    </div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Beoplay H7</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('frontend/images/view_2.jpg')}}"
                                                                   alt="">
                                    </div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('frontend/images/view_3.jpg')}}"
                                                                   alt="">
                                    </div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225</div>
                                        <div class="viewed_name"><a href="#">Samsung J730F...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('frontend/images/view_4.jpg')}}"
                                                                   alt="">
                                    </div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('frontend/images/view_5.jpg')}}"
                                                                   alt="">
                                    </div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('frontend/images/view_6.jpg')}}"
                                                                   alt="">
                                    </div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$375</div>
                                        <div class="viewed_name"><a href="#">Speedlink...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brands -->
    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">

                        <!-- Brands Slider -->
                        <div class="owl-carousel owl-theme brands_slider">
                            @foreach($brands as $brand)
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center">
                                        <img src="{{ getImageUrl($brand->image) }}" alt="{{ $brand->name }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div
                        class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_icon"><img src="{{ asset('frontend/images/send.png')}}" alt=""></div>
                            <div class="newsletter_title">Sign up for Newsletter</div>
                            <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
                        </div>
                        <div class="newsletter_content clearfix">
                            <form action="{{ route('newsletter.store') }}" method="post" class="newsletter_form">
                                @csrf

                                <input type="email" name="email" class="newsletter_input" value="{{ old('email') }}"
                                       required="required" placeholder="Enter your email address">

                                @error('email')
                                <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                @enderror

                                <button type="submit" class="newsletter_button">Subscribe</button>
                            </form>
                            {{--<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

