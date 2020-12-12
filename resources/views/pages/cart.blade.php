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
                            <div class="col-sm-8">
                                <div class="cart_items">
                                    <ul class="cart_list">
                                        @foreach($cart_products as $product)
                                            <li class="cart_item clearfix">
                                                <div class="cart_item_image">
                                                    <img src="{{ getImageUrl($product->options->image) }}"
                                                         alt="{{ $product->name }}">
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
                                                            <a href="javascript:void(0)" type="button"
                                                               onclick="removeCart(this)"
                                                               data-row-id="{{ $product->rowId }}"
                                                               class="btn btn-sm btn-danger">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="cart_items">
                                    <div class="cart_list p-3">
                                        <a href="javascript:void(0)" type="button"
                                           class="btn btn-sm btn-danger float_right">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Empty Cart
                                        </a>

                                        <div class="footer_title">
                                            Sub Total : TK {{ Cart::instance('cart')->subtotal() }}
                                        </div>

                                        <div class="footer_title mt-2">
                                            Shipping : TK {{ Cart::instance('cart')->total() }}
                                        </div>

                                        <div class="footer_title mt-2">
                                            Vat : 0%
                                        </div>

                                        <div class="mt-2 footer_title">
                                            Order Total : TK {{ Cart::instance('cart')->subtotal() }}
                                        </div>

                                        <form class="form-inline mt-4">
                                            <div class="form-group mr-2 mb-2">
                                                <input type="password" class="form-control form-control-sm"
                                                       placeholder="Enter your coupon code">
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-primary mb-2">Apply</button>
                                        </form>

                                        <div class="mt-2">
                                            <a href="{{ route('checkout') }}"
                                               class="btn btn-primary w-100 mt-3 font-weight-bold h-50">
                                                Checkout Now
                                            </a>

                                            <p class="text-center mt-2">
                                                <i class="fab fa-expeditedssl" style="font-size: 16px"
                                                   aria-hidden="true"></i> SSL Secure payment
                                            </p>

                                            <p style="font-size: 13px">
                                                By checking out you agree with our <a
                                                    href="https://www.exonhost.com/tos.html" target="_blank">TOS</a>.
                                                We will process your personal data for the
                                                fulfillment of your order and other purposes as per our
                                                <a href="https://www.exonhost.com/privacy.html" target="_blank">Privacy
                                                    Policy</a>.
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
    </div>
@endsection

@section('script')
    <script>

        function removeCart(e) {

            let rowId = $(e).data("rowId")

            axios.get('{{ route('cart.remove', '') }}/' + rowId)
                .then(response => {

                    $(e).parents('.cart_item').fadeOut('slow') // remove dom

                    $('#cart-counter').html(response.data.cart_count)
                    $('#cart-total').html(response.data.cart_total)

                    toastr.success(response.data.message);
                })
                .catch(error => {
                    toastr.error(error.response.data.message);
                })
        }
    </script>
@endsection
