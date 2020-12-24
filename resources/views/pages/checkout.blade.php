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
                                            <h4 class="text-center">Shipping Information</h4>

                                            <form action="{{ route('register') }}" id="contact_form" method="post">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Full Name</label>
                                                    <input type="text" class="form-control" aria-describedby="emailHelp"
                                                           placeholder="Enter Full Name " name="name"
                                                           value="{{ old('name') }}" required>

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Phone</label>
                                                    <input type="text"
                                                           class="form-control @error('phone') is-invalid @enderror"
                                                           name="phone" value="{{ old('phone') }}"
                                                           aria-describedby="emailHelp"
                                                           placeholder="Enter Phone Number" value="{{ old('phone') }}"
                                                           required>

                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           name="email" value="{{ old('email') }}"
                                                           aria-describedby="emailHelp"
                                                           placeholder="Enter Email Address" required>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Address</label>
                                                    <input type="text" class="form-control"
                                                           aria-describedby="emailHelp"
                                                           placeholder="Enter Full Address " name="address"
                                                           required="">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">City</label>
                                                    <input type="text" class="form-control"
                                                           aria-describedby="emailHelp"
                                                           placeholder="Enter city name" name="city"
                                                           required="">

                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div><b>Select Payment Method</b></div>

                                                <div class="form-group mt-2">
                                                    <ul class="logos_list">
                                                        <li>
                                                            <input id="mastercard" type="radio" name="payment"
                                                                   value="stripe">

                                                            <label for="mastercard">
                                                                <img
                                                                    src="{{ asset('frontend/images/mastercard.png') }}"
                                                                    style="width: 100px; height: 60px;">
                                                            </label>
                                                        </li>

                                                        <li>
                                                            <input id="paypal" type="radio" name="payment"
                                                                   value="paypal">

                                                            <label for="paypal">
                                                                <img
                                                                    src="{{ asset('frontend/images/paypal.png') }}"
                                                                    style="width: 100px; height: 60px;">
                                                            </label>
                                                        </li>

                                                        <li>
                                                            <input id="moille" type="radio" name="payment"
                                                                   value="ideal">

                                                            <label for="moille">
                                                                <img
                                                                    src="{{ asset('frontend/images/mollie.png') }}"
                                                                    style="width: 100px; height: 60px;">
                                                            </label>
                                                        </li>

                                                        <li>
                                                            <input id="handcash" type="radio" name="payment"
                                                                   value="ideal">

                                                            <label for="handcash">
                                                                <img
                                                                    src="{{ asset('frontend/images/handcash.png') }}"
                                                                    style="width: 100px; height: 60px;">
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="contact_form_button text-center">
                                                    <button type="submit" class="btn btn-info">Pay Now</button>
                                                </div>
                                            </form>
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

@section('script')
    @include('scripts.cart-script')
@endsection
