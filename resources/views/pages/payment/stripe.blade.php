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
                        <div class="row">
                            @if (Cart::instance('cart')->count())
                                <div class="col-sm-4">
                                    @include('components.order-summery')
                                </div>

                                <div class="col-sm-8">
                                    <div class="cart_items">
                                        <div class="cart_list p-3">
                                            <h4 class="text-center">Payment Complete</h4>

                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-sm-12 mt-5">
                                    <div class="alert alert-danger">
                                        <strong>Your cart is empty, You should go to <a href="{{ route('home') }}">
                                                shopping
                                                page </a>
                                        </strong>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
