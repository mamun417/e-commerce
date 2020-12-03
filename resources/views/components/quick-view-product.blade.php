<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLavel">Product Quick View</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <div class="row">
                <div class="col-sm-5">
                    <div class="card">
                        <img style="height: 388px; padding: 30px;"
                             src="{{ getImageUrl(@$product->image_one) }}">
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title">{{ @$product->name }}</h5>
                        <p class="text-dark">
                            {!! Str::limit(@$product->description, 333) !!}
                        </p>

                        <div>
                            <p class="text-dark">
                                <b>Category : </b> <span>{{ @$product->category->name }}</span>
                            </p>
                            <p class="text-dark">
                                <b>Brand : </b> <span>{{ @$product->brand->name }}</span>
                            </p>
                            <p class="text-dark">
                                <b>Stock : </b> <span class="badge badge-success"> Available</span>
                            </p>
                        </div>

                        <form class="form-inline" id="add-to-cart-form"
                              action="{{ route('cart.store', @$product->slug ?? '') }}">
                            @csrf

                            <div class="form-group mx-sm-3 mb-2" style="margin-left: 0 !important;">
                                <input type="number" class="form-control form-control-sm" style="max-width: 65px"
                                       name="quantity" value="1" pattern="[0-9]*" min="1">
                            </div>
                            <button type="button" onclick="addToCart()" class="btn btn-sm btn-primary mb-2">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
