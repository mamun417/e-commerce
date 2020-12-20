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

    function addToCart(buyNow = false) {
        let form = $('#add-to-cart-form')

        axios({
            url: $(form).attr('action'),
            method: 'post',
            data: $(form).serialize()
        })
            .then(response => {
                $('#cart-counter').html(response.data.cart_count)
                $('#cart-total').html(response.data.cart_total)

                if (buyNow) {
                    location.href = '{{ route('cart.index') }}'
                } else {
                    toastr.success(response.data.message);
                }
            })
            .catch(error => {
                console.log(error)
                toastr.error(error.response.data.errors['quantity'][0]);
            })
    }

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
