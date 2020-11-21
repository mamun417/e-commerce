@extends('layouts.app')
@section('title', 'Cart')

@push('extra-links')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/cart_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/cart_responsive.css') }}">
@endpush

@section('content')
    <div class="cart_section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart_container">
                        <div class="cart_items">
                            <ul class="cart_list">
                                @foreach($cart_products as $product)
                                    <li class="cart_item clearfix">
                                        <div class="cart_item_image">
                                            <img src="{{ getImageUrl($product->options->image) }}" alt="{{ $product->name }}">
                                        </div>
                                        <div
                                            class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title">Name</div>
                                                <div class="cart_item_text">{{ $product->name }}</div>
                                            </div>

                                            <div class="cart_item_color cart_info_col">
                                                <div class="cart_item_title">Color</div>
                                                <div class="cart_item_text"><span
                                                        style="background-color:#999999;"></span>Silver
                                                </div>
                                            </div>

                                            <div class="cart_item_price cart_info_col">
                                                <div class="cart_item_title">Price</div>
                                                <div class="cart_item_text">TK {{ $product->price }}</div>
                                            </div>

                                            <div class="cart_item_price cart_info_col">
                                                <div class="cart_item_title">Quantity</div>
                                                <div class="cart_item_text">{{ $product->qty }}</div>
                                            </div>

                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title">Action</div>
                                                <div class="cart_item_text">
                                                    <a href="{{ route('cart.remove', $product->rowId) }}"
                                                       class="btn btn-sm btn-danger">Remove</a>

                                                    <button class="btn btn-sm btn-info">Move to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
