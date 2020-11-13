@php($slider_product = $products['main_slider'])
<!-- Banner -->
<div class="banner">
    <div class="banner_background"
         style="background-image:url({{ asset('frontend/images/banner_background.jpg')}})"></div>
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="banner_product_image">
                <img src="{{ getImageUrl($slider_product->image_one) }}" width="521px" height="459px"
                     alt="{{ $slider_product->name }}">
            </div>
            <div class="col-lg-5 offset-lg-4 fill_height">
                <div class="banner_content">
                    <h1 class="banner_text">{{ $slider_product->name }}</h1>
                    <div class="banner_price">
                        @if ($slider_product->discount_price)
                            <span>TK {{ $slider_product->selling_price }}</span>
                            TK {{ $slider_product->discount_price }}
                        @else
                            TK {{ $slider_product->selling_price }}
                        @endif
                    </div>
                    <div class="banner_product_name">{{ $slider_product->brand->name }}</div>
                    <div class="button banner_button"><a href="#">Shop Now</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
