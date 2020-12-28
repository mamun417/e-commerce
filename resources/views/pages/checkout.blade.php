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

                                            <form action="{{ route('order') }}" method="post">
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
                                                    <input type="text"
                                                           class="form-control @error('address') is-invalid @enderror"
                                                           placeholder="Enter Full Address"
                                                           name="address"
                                                           value="{{ old('address') }}"
                                                           required="">

                                                    @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">City</label>
                                                    <input type="text"
                                                           class="form-control @error('city') is-invalid @enderror"
                                                           placeholder="Enter city name"
                                                           value="{{ old('city') }}"
                                                           name="city"
                                                           required="">

                                                    @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div><b>Select Payment Method</b></div>

                                                <div class="form-group mt-2">
                                                    <ul class="logos_list @error('payment') is-invalid @enderror"
                                                        @foreach($payment_methods as $method)
                                                            <li>
                                                                <input id="{{ $method }}" type="radio" name="payment"
                                                                       value="{{ $method }}">

                                                                <label for="{{ $method }}">
                                                                    <img
                                                                        src="{{ asset('frontend/images/'.$method.'.png') }}"
                                                                        style="width: 100px; height: 60px;">
                                                                </label>
                                                            </li>
                                                        @endforeach
                                                    </ul>

                                                    @error('payment')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="contact_form_button text-center">
                                                    <button type="submit" class="btn btn-info">Order Submit</button>
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
