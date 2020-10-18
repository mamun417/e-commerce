<div class="modal inmodal fade" id="productViewModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header no-padding" style="padding: 8px!important;">
                <h4 class="modal-title">View Product</h4>
            </div>
            <div class="modal-body view-product-modal">
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

                                    <div class="m-b-sm">
                                        <strong>Brand :</strong> {{ $product->brand->name }}
                                    </div>

                                    <div class="m-b-sm">
                                        <strong>Selling Price :</strong> {{ $product->selling_price }} TK
                                    </div>

                                    <div class="m-b-sm">
                                        <strong>Discount Pricing :</strong> {{ $product->discount_price }} TK
                                    </div>

                                    <div class="m-b-sm">
                                        <strong>Video Link :</strong> {{ $product->video_link }}
                                    </div>
                                </div>
                            </div>
                            <div class="social-body">
                                <p>{!! $product->description !!}</p>
                            </div>

                            <div class="social-body">
                                <h4>Images</h4>
                                @foreach([1,2,3] as $n)
                                    <span style="vertical-align: top">{{ $n.'.'  }}</span>
                                    <img alt="image" class="img-rounded img-lg m-r-sm"
                                         src="{{ getImageUrl(null) }}">
                                @endforeach

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 m-b-lg">
                        <div class="vertical-container light-timeline no-margins">
                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-content float-e-margins">
                                    <h3>Size</h3>
                                    @php
                                        $size = explode(',', $product->size)
                                    @endphp

                                    @foreach($size as $item)
                                        <button class="btn btn-xs btn-primary">
                                            <strong>{{ $item }}</strong>
                                        </button>
                                    @endforeach
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-content float-e-margins">
                                    <h3>Color</h3>
                                    @php
                                        $color = explode(',', $product->color)
                                    @endphp

                                    @foreach($color as $item)
                                        <button class="btn btn-xs btn-primary">
                                            <strong>{{ $item }}</strong>
                                        </button>
                                    @endforeach
                                </div>
                            </div>

                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-content float-e-margins">
                                    <h3>Type</h3>
                                    <div class="form-group m-b-none">
                                        <div>
                                            @php
                                                $types = [
                                                    'Main Slider', 'Hot Deal', 'Best Rated',
                                                    'Mid Slider', 'Hot New', 'Trend'
                                                ]
                                            @endphp

                                            @foreach($types as $type)
                                                <label class="checkbox-inline i-checks">
                                                    <i class="fa fa-check"></i>
                                                    {{ $type }}
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


