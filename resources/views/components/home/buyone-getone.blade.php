<div class="trends">
    <div class="trends_background"
         style="background-image:url('{{ asset('frontend/images/trends_background.jpg') }}')">
    </div>
    <div class="trends_overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Trends Content -->
            <div class="col-lg-3">
                <div class="trends_container">
                    <h2 class="trends_title">Buy One Get One</h2>
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
                        @foreach ($products['buyone_getone'] as $product)
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div
                                        class="trends_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ getImageUrl($product->image_one) }}" alt="">
                                    </div>
                                    <div class="trends_content">
                                        <div class="trends_category">
                                            <a href="#">{{ $product->category->name }}</a>
                                        </div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name">
                                                <a href="product.html">{{ $product->name }}</a>
                                            </div>

                                            <div class="trends_price product_price discount mt-0">
                                                @if ($product->discount_price)
                                                    TK {{ $product->discount_price }}
                                                    <span class="ml-0">TK {{ $product->selling_price }}</span>
                                                @else
                                                    TK {{ $product->selling_price }}
                                                @endif
                                            </div>
                                        </div>

                                        <a  href="{{ route('cart.store', $product->slug) }}">
                                            <button class="product_cart_button visible" style="opacity: initial">
                                                Add to Cart
                                            </button>
                                        </a>
                                    </div>
                                    <ul class="trends_marks">
                                        @if($product->discount_price)
                                            <li class="trends_mark trends_new" style="background: #df3b3b">
                                                -{{ $product->discount_percent }}%
                                            </li>
                                        @endif
                                    </ul>

                                    <a href="{{ route('wishlist.add', $product->slug) }}">
                                        @php($exit_cart = \App\Http\Controllers\Partial\Helper\CartHelper::checkCartExitProduct('wishlist', $product->id))

                                        <div class="trends_fav {{ $exit_cart ? 'active' : '' }}">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
