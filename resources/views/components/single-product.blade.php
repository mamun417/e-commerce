<div class="featured_slider_item">
    <div class="border_active"></div>
    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

        <div class="product_image d-flex flex-column align-items-center justify-content-center">
            <a href="{{ route('product.show', $product->slug) }}">
                <img src="{{ getImageUrl($product->image_one) }}"
                     alt="{{ $product->name }}" style="height: 115px">
            </a>
        </div>

        <div class="product_content">
            <div class="product_price discount">
                @if ($product->discount_price)
                    TK {{ $product->discount_price }}
                    <span>TK {{ $product->selling_price }}</span>
                @else
                    TK {{ $product->selling_price }}
                @endif
            </div>

            <div class="product_name">
                <div>
                    <a href="{{ route('product.show', $product->slug) }}" title="{{ $product->name }}">
                        {{ $product->name }}
                    </a>
                </div>
            </div>

            <div class="product_extras">
                <div class="product_color">
                    @foreach(json_decode($product->color) ?? [] as $color)
                        @php($extra_style = $color == 'white' ? 'border: 1px solid #ddd' : '')
                        <input type="radio" name="product_color"
                               style="background:{{ $color }}; {{ $extra_style }}">
                    @endforeach
                </div>

                <button onclick="addToCart('{{ $product->slug }}')" class="product_cart_button">Add to Cart</button>
            </div>
        </div>

        @php($exit_cart = \App\Http\Controllers\Partial\Helper\CartHelper::checkCartExitProduct('wishlist', $product->id))
        <div onclick="addToWishlist('{{ $product->slug }}')" class="product_fav {{ $exit_cart ? 'active' : '' }}">
            <i class="fas fa-heart"></i>
        </div>

        @if($product->discount_price)
            <ul class="product_marks">
                <li class="product_mark product_discount">-{{ $product->discount_percent }}%</li>
                {{--<li class="product_mark product_new">new</li>--}}
            </ul>
        @endif
    </div>
</div>

@section('script')
    <script>
        function addToWishlist(productSlug) {
            axios.get('{{ route('wishlist.add', '') }}/' + productSlug)
                .then(response => {
                    $('#wish-list-counter').html(response.data.wishlist_count)
                    toastr.success(response.data.message);
                })
                .catch(error => {
                    toastr.error(error.response.data.message);
                })
        }

        function addToCart(productSlug) {
            axios.get('{{ route('cart.add', '') }}/' + productSlug)
                .then(response => {
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
