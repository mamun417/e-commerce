<div class="row">
    <div class="col-lg-8">
        <div class="social-feed-box">
            <div class="social-avatar">
                <div class="media-body">
                    <button
                        class="btn btn-xs pull-right {{ $product->status ? 'btn-primary' : 'btn-warning' }}"
                    >
                        <strong>
                            <i class="fa fa-check"></i> {{ $product->status ? 'Active' : 'Inactive' }}
                        </strong>
                    </button>

                    <h4><strong>{{ ucfirst($product->name) }}</strong></h4>

                    <div class="m-b-sm">
                        <strong>Date :</strong> {{ cus_date($product->created_at) }}
                    </div>

                    <div class="m-b-sm">
                        <strong>Quantity :</strong> {{ $product->quantity }}
                    </div>

                    <div class="m-b-sm">
                        <strong>Category :</strong> {{ $product->category->name }}
                    </div>

                    @isset($product->brand->name)
                        <div class="m-b-sm">
                            <strong>Brand :</strong> {{ $product->brand->name }}
                        </div>
                    @endisset

                    <div class="m-b-sm">
                        <strong>Selling Price :</strong> {{ $product->selling_price }} TK
                    </div>

                    @isset($product->video_link)
                        <div class="m-b-sm">
                            <strong>Discount Pricing :</strong> {{ $product->discount_price }} TK
                        </div>
                    @endisset

                    @isset($product->video_link)
                        <div class="m-b-sm" style="display: flex">
                            <strong>Video Link :</strong>
                            <a class="m-l-xs" href="{!! $product->video_link !!}" target="_blank">
                                {{ $product->video_link }}
                            </a>
                        </div>
                    @endisset
                </div>
            </div>
            <div class="social-body">
                <p>{!! $product->description !!}</p>
            </div>

            <div class="social-body">
                <h4>Images</h4>
                @foreach(\App\Models\Product::getImagesColumns() as $key => $image)
                    <span style="vertical-align: top">{{ ++$key.'.'  }}</span>
                    <img alt="image" class="img-rounded img-lg m-r-sm"
                         src="{{ getImageUrl($product->$image) }}">
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-lg-4 m-b-lg">
        <div class="vertical-container light-timeline no-margins">
            <div class="vertical-timeline-block">
                <div class="vertical-timeline-content float-e-margins">
                    <h4>Size</h4>
                    @if ($product->size)
                        @php
                            $size = explode(',', $product->size)
                        @endphp

                        @foreach($size as $item)
                            <button class="btn btn-xs btn-primary">
                                <strong>{{ $item }}</strong>
                            </button>
                        @endforeach
                    @else
                        No size found
                    @endif

                </div>
            </div>

            <div class="vertical-timeline-block">
                <div class="vertical-timeline-content float-e-margins">
                    <h4>Color</h4>
                    @if ($product->color)
                        @php
                            $color = explode(',', $product->color)
                        @endphp

                        @foreach($color as $item)
                            <button class="btn btn-xs btn-primary">
                                <strong>{{ $item }}</strong>
                            </button>
                        @endforeach
                    @else
                        No color found
                    @endif

                </div>
            </div>

            <div class="vertical-timeline-block">
                <div class="vertical-timeline-content float-e-margins">
                    <h4>Type</h4>
                    <div class="form-group m-b-none">
                        <div>
                            @foreach(\App\Models\Product::getTypes() as $type_name => $display_name)
                                <label class="checkbox-inline i-checks {{ array_key_exists($type_name, $product_types) ? 'text-primary' : '' }}">
                                    <i class="fa fa-check"></i>
                                    {{ $display_name }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
