@extends('layouts.app')
@section('title', 'Cart')

@push('extra-links')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/shop_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/shop_responsive.css') }}">
@endpush

@section('content')
    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <!-- Shop Sidebar -->
                    <div class="shop_sidebar">
                        <div class="sidebar_section">
                            <div class="sidebar_title">Categories</div>
                            <ul class="sidebar_categories">
                                <li><a href="#">Computers & Laptops</a></li>
                                <li><a href="#">Cameras & Photos</a></li>
                                <li><a href="#">Hardware</a></li>
                                <li><a href="#">Smartphones & Tablets</a></li>
                                <li><a href="#">TV & Audio</a></li>
                                <li><a href="#">Gadgets</a></li>
                                <li><a href="#">Car Electronics</a></li>
                                <li><a href="#">Video Games & Consoles</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="sidebar_section filter_by_section">
                            <div class="sidebar_title">Filter By</div>
                            <div class="sidebar_subtitle">Price</div>
                            <div class="filter_price">
                                <div id="slider-range" class="slider_range"></div>
                                <p>Range: </p>
                                <p><input type="text" id="amount" class="amount" readonly
                                          style="border:0; font-weight:bold;"></p>
                            </div>
                        </div>
                        <div class="sidebar_section">
                            <div class="sidebar_subtitle color_subtitle">Color</div>
                            <ul class="colors_list">
                                <li class="color"><a href="#" style="background: #b19c83;"></a></li>
                                <li class="color"><a href="#" style="background: #000000;"></a></li>
                                <li class="color"><a href="#" style="background: #999999;"></a></li>
                                <li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
                                <li class="color"><a href="#" style="background: #df3b3b;"></a></li>
                                <li class="color"><a href="#"
                                                     style="background: #ffffff; border: solid 1px #e1e1e1;"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar_section">
                            <div class="sidebar_subtitle brands_subtitle">Brands</div>
                            <ul class="brands_list">
                                <li class="brand"><a href="#">Apple</a></li>
                                <li class="brand"><a href="#">Beoplay</a></li>
                                <li class="brand"><a href="#">Google</a></li>
                                <li class="brand"><a href="#">Meizu</a></li>
                                <li class="brand"><a href="#">OnePlus</a></li>
                                <li class="brand"><a href="#">Samsung</a></li>
                                <li class="brand"><a href="#">Sony</a></li>
                                <li class="brand"><a href="#">Xiaomi</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-9">

                    <!-- Shop Content -->

                    <div class="shop_content">
                        <div class="shop_bar clearfix">
                            <div class="shop_product_count"><span>{{ $products->total() }}</span> products found</div>
                            <div class="shop_sorting">
                                <span>Sort by:</span>
                                <ul>
                                    <li>
                                        <span class="sorting_text">
                                            highest rated <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <ul>
                                            <li class="shop_sorting_button"
                                                data-isotope-option='{ "sortBy": "original-order" }'>
                                                highest rated
                                            </li>
                                            <li class="shop_sorting_button"
                                                data-isotope-option='{ "sortBy": "name" }'>name
                                            </li>
                                            <li class="shop_sorting_button"
                                                data-isotope-option='{ "sortBy": "price" }'>price
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product_grid row">
                            <div class="product_grid_border"></div>

                            @foreach($products as $product)
                                <div class="product_item discount">
                                    <div class="product_border"></div>
                                    <div
                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                        <img height="115px" width="115px" src="{{ getImageUrl($product->image_one) }}"
                                             alt=""></div>
                                    <div class="product_content">

                                        <div class="product_price">
                                            @if ($product->discount_price)
                                                TK {{ $product->discount_price }}
                                                <span>TK {{ $product->selling_price }}</span>
                                            @else
                                                TK {{ $product->selling_price }}
                                            @endif
                                        </div>

                                        <div class="product_name">
                                            <div><a href="#" tabindex="0">{{ $product->name }}</a></div>
                                        </div>

                                        <div class="">
                                            <button onclick="quickView('{{ $product->slug }}')"
                                                    class="btn btn-sm btn-outline-primary mt-2">
                                                Add To Cart
                                            </button>
                                        </div>
                                    </div>

                                    @php($exit_cart = \App\Http\Controllers\Partial\Helper\CartHelper::checkCartExitProduct('wishlist', $product->id))
                                    <div onclick="addToWishlist('{{ $product->slug }}')"
                                         class="product_fav {{ $exit_cart ? 'active' : '' }}">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    @if($product->discount_price)
                                        <ul class="product_marks">
                                            <li class="product_mark product_discount">
                                                -{{ $product->discount_percent }} %
                                            </li>
                                        </ul>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        {{ $products->appends(['keyword' => request('keyword')])->links() }}
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <p>
                                        Showing {{ $products->firstItem() }} to {{ $products->lastItem() }}
                                        of {{ $products->total() }} entries ( {{ $products->lastPage() }} pages)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade quick-view-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        @include('components.quick-view-product')
    </div>

@endsection

@section('script')
    @include('scripts.cart-script')
    @include('scripts.quick-view-script')
@endsection
