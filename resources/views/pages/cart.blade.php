@extends('layouts.app')
@section('title', 'Cart')

@push('extra-links')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/cart_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/cart_responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/plugins/quick-view/css/reset.css') }}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/quick-view/css/style.css') }}"> <!-- Resource style -->
    <script src="{{ asset('frontend/plugins/quick-view/js/modernizr.js') }}"></script> <!-- Modernizr -->
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
                </div>
            </div>
        </div>
    </div>

    <ul class="cd-items cd-container">
        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Item Preview">
            <a href="#0" class="cd-trigger">Quick View</a>
        </li> <!-- cd-item -->
    </ul> <!-- cd-items -->

    <div class="cd-quick-view">
        <div class="cd-slider-wrapper">
            <ul class="cd-slider">
                <li class="selected"><img src="{{ asset('frontend/plugins/quick-view/img/item-1.jpg') }}" alt="Product 1"></li>
                <li><img src="{{ asset('frontend/plugins/quick-view/img/item-2.jpg') }}" alt="Product 2"></li>
                <li><img src="{{ asset('frontend/plugins/quick-view/img/item-3.jpg') }}" alt="Product 3"></li>
            </ul> <!-- cd-slider -->

            <ul class="cd-slider-navigation">
                <li><a class="cd-next" href="#0">Prev</a></li>
                <li><a class="cd-prev" href="#0">Next</a></li>
            </ul> <!-- cd-slider-navigation -->
        </div> <!-- cd-slider-wrapper -->

        <div class="cd-item-info">
            <h2>Produt Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, omnis illo iste ratione. Numquam
                eveniet quo, ullam itaque expedita impedit. Eveniet, asperiores amet iste repellendus similique
                reiciendis, maxime laborum praesentium.</p>

            <ul class="cd-item-action">
                <li>
                    <button class="add-to-cart">Add to cart</button>
                </li>
                <li><a href="#0">Learn more</a></li>
            </ul> <!-- cd-item-action -->
        </div> <!-- cd-item-info -->
        <a href="#0" class="cd-close">Close</a>
    </div> <!-- cd-quick-view -->


@endsection

@section('script')

    <script src="{{ asset('frontend/plugins/quick-view/js/velocity.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/quick-view/js/main.js') }}"></script> <!-- Resource jQuery -->

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
