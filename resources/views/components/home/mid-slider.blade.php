<div class="owl-carousel owl-theme banner_2_slider">
    @foreach($products['mid_slider'] as $product)
        <div class="owl-item">
            <div class="banner_2_item">
                <div class="container fill_height">
                    <div class="row fill_height">
                        <div class="col-lg-4 col-md-6 fill_height">
                            <div class="banner_2_content">
                                <div class="banner_2_category">{{ $product->category->name }}</div>
                                <div class="banner_2_title">{{ $product->name }}</div>
                                <div class="banner_2_text">
                                    {{ $product->brand->name }}
                                </div>
                                <div class="banner_2_text">
                                    <h3>TK {{ $product->selling_price }}</h3>
                                </div>
                                <div class="rating_r rating_r_4 banner_2_rating">
                                    <i></i><i></i><i></i><i></i><i></i>
                                </div>
                                <div class="button banner_2_button"><a href="#">Explore</a></div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 fill_height">
                            <div class="banner_2_image_container">
                                <div class="banner_2_image">
                                    <img src="{{ getImageUrl($product->image_one) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
