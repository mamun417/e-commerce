<div class="cart_items">
    <div class="cart_list p-3">
        <a href="javascript:void(0)" type="button"
           class="btn btn-sm btn-danger float_right"
           onclick="return confirm('Are you sure that you empty shopping cart ?')
               ? window.location='{{ route('cart.empty') }}'
               : ''">
            Empty Cart
        </a>

        <div class="footer_title d-flex">
            Sub Total : TK {{ Cart::instance('cart')->subtotal() }}
        </div>

        <div class="footer_title mt-2">
            Shipping : TK 00
        </div>

        <div class="footer_title mt-2">
            Vat : 0%
        </div>

        @php
            $coupon_key = \App\Models\Coupon::COUPON_KEY;
            $coupon = session($coupon_key);
        @endphp

        <div class="mt-2 footer_title">
            Total :
            TK {{ session($coupon_key) ? session($coupon_key)['discount_price'] : Cart::instance('cart')->total() }}
        </div>

        @if ($coupon)
            <div class="btn float_right text-danger" title="Remove promo code"
                 onclick="window.location = '{{ route('coupon.remove') }}'">
                <i class="fa fa-times-circle"></i>
            </div>
            <p class="text-success mt-2">
                Discount Coupon Applied Successfully.<br>
                Promo Code : <b>{{ $coupon['name'] }}</b>,
                {{ $coupon['amount'] }}
                {{ \App\Models\Coupon::AMOUNT_PERCENT == $coupon['type'] ? '%' : '' }}
                Discount.
            </p>
        @else
            <form action="{{ route('coupon.apply') }}" method="post"
                  class="form-inline mt-4 mb-2">
                @csrf()

                <div class="form-group mr-2 mb-2">
                    <input name="coupon" type="text"
                           class="form-control form-control-sm"
                           placeholder="Enter your coupon code">
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-2">Apply
                </button>

                @error('coupon')
                <span class="help-block m-b-none text-danger">{{ $message }}</span>
                @enderror
            </form>
        @endif

        @if (getCurrentRoute() === 'cart.index')
            <div>
                <a href="{{ route('checkout') }}"
                   class="btn btn-primary w-100 font-weight-bold h-50">
                    Checkout Now
                </a>
            </div>
        @endif
    </div>
</div>
