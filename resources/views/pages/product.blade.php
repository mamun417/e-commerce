@extends('layouts.app')
@section('title', 'Cart')

@push('extra-links')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/product_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/product_responsive.css') }}">
@endpush

@section('content')
    <div class="super_container">

        <!-- Single Product -->
        <div class="single_product">
            <div class="container">
                <div class="row">

                    <!-- Images -->
                    <div class="col-lg-2 order-lg-1 order-2">
                        <ul class="image_list">
                            <li data-image="{{ getImageUrl($product->image_one) }}">
                                <img src="{{ getImageUrl($product->image_one) }}" alt="">
                            </li>
                            <li data-image="{{ getImageUrl($product->image_two) }}">
                                <img src="{{ getImageUrl($product->image_two) }}" alt="">
                            </li>
                            <li data-image="{{ getImageUrl($product->image_three) }}">
                                <img src="{{ getImageUrl($product->image_three) }}" alt="">
                            </li>
                        </ul>
                    </div>

                    <!-- Selected Image -->
                    <div class="col-lg-5 order-lg-2 order-1">
                        <div class="image_selected">
                            <img src="{{ getImageUrl($product->image_one) }}" alt="">
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="col-lg-5 order-3">
                        <div class="product_description">
                            <div class="product_category">
                                <h4>{{ ucfirst($product->category->name) }}</h4>
                            </div>
                            <div class="product_name">{{ ucfirst($product->name) }}</div>
                            <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            <div class="product_text">
                                <p>{!! Str::limit($product->description, 365) !!}</p>
                                <p>
                                    Video Link :
                                    <a target="_blank" href="https://{{ $product->video_link }}">
                                        {{ $product->video_link }}
                                    </a>
                                </p>
                            </div>

                            <div class="product_price mt-2">
                                @if ($product->discount_price)
                                    TK {{ $product->discount_price }}
                                    <span>TK <strike>{{ $product->selling_price }}</strike></span>
                                @else
                                    TK {{ $product->selling_price }}
                                @endif
                            </div>

                            <div class="order_info d-flex flex-row mt-4">
                                <form action="#">
                                    <div class="clearfix" style="z-index: 1000;">

                                        <!-- Product Quantity -->
                                        <div class="product_quantity clearfix">
                                            <span>Quantity: </span>
                                            <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                            <div class="quantity_buttons">
                                                <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                                        class="fas fa-chevron-up"></i></div>
                                                <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                                        class="fas fa-chevron-down"></i></div>
                                            </div>
                                        </div>

                                        <!-- Product Color -->
                                        @if ($product->color)
                                            @php($colors = json_decode($product->color))
                                            <ul class="product_color">
                                                <li>
                                                    <span>Color: </span>
                                                    <div class="color_mark_container">
                                                        <div id="selected_color" class="color_mark"
                                                            style="background: {{ $colors[0] }}">
                                                        </div>
                                                    </div>
                                                    <div class="color_dropdown_button">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>

                                                    <ul class="color_list">
                                                        @foreach ($colors as $color)
                                                            <li style="padding-right: 49px">
                                                                <div class="color_mark" style="background: {{ $color }};">
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        @endif

                                    <!-- Product Size -->
                                        @if ($product->size)
                                            @php($sizes = json_decode($product->size))
                                            <ul class="product_color">
                                                <li>
                                                    <span>Size: </span>
                                                    <div class="color_mark_container">
                                                        <span>{{ strtoupper($sizes[0]) }}</span>
                                                    </div>

                                                    <div class="color_dropdown_button">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>

                                                    <ul class="color_list">
                                                        @foreach ($sizes as $size)
                                                            <li> {{ strtoupper($size) }} </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        @endif
                                    </div>

                                    <div class="button_container">
                                        <button type="button" class="btn btn-primary">Add to Cart</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="featured">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="false">Review</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="py-4">
                                {!! $product->description !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="py-4">
                                Review goes here...
                            </div>
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
                                        <div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
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
                                        <div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
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
                                        <div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
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
                                        <div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
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
                                        <div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
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
                                        <div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
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
    </div>
@endsection

@section('script')
    <script src="{{ asset('frontend/js/product_custom.js') }}"></script>
@endsection
