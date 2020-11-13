<div class="deals_featured">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                <!-- Deals -->
                <div class="deals">
                    <div class="deals_title">Deals of the Week</div>
                    <div class="deals_slider_container">
                        <div class="owl-carousel owl-theme deals_slider">
                            @foreach($products['hot_deal'] as $product)
                                <div class="owl-item deals_item">
                                    <div class="deals_image"><img src="{{ getImageUrl($product->image_one) }}" alt="">
                                    </div>
                                    <div class="deals_content">
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_category">
                                                <a href="javascript:void(0)">{{ $product->category->name }}</a>
                                            </div>
                                            @if ($product->discount_price)
                                                <div class="deals_item_price_a ml-auto">
                                                    TK {{ $product->selling_price }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_name">{{ $product->name }}</div>
                                            <div class="deals_item_price ml-auto">
                                                TK {{ $product->discount_price ?? $product->selling_price }}
                                            </div>
                                        </div>
                                        <div class="available">
                                            <div class="available_line d-flex flex-row justify-content-start">
                                                <div class="available_title">Available: <span>{{ $product->quantity }}</span></div>
                                                <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                            </div>
                                            <div class="available_bar"><span style="width:{{ $product->quantity/100 }}%"></span></div>
                                        </div>
                                        <div
                                            class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                            <div class="deals_timer_title_container">
                                                <div class="deals_timer_title">Hurry Up</div>
                                                <div class="deals_timer_subtitle">Offer ends in:</div>
                                            </div>
                                            <div class="deals_timer_content ml-auto">
                                                <div class="deals_timer_box clearfix" data-target-time="">
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                        <span>hours</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                        <span>mins</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                        <span>secs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="deals_slider_nav_container">
                        <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i>
                        </div>
                        <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i>
                        </div>
                    </div>
                </div>

                <!-- Featured -->
                <div class="featured">
                    <div class="tabbed_container">

                        <div class="tabs">
                            <ul class="clearfix">
                                <li class="active">Hot New</li>
                                <li>Best Rated</li>
                                <li>Trend</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        @foreach(['hot_new', 'best_rated', 'trend'] as $item)
                            <div class="product_panel panel {{ $loop->first ? 'active' : '' }}">
                                <div class="featured_slider slider">
                                    @foreach($products[$item] as $product)
                                        @include('components.single-product')
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
