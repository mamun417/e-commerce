<script>
    function quickView(slug) {
        axios.get('{{ route('product.show', '') }}/' + slug, {
            params: {
                quick_view: true
            }
        })
            .then(function (response) {
                $('.quick-view-modal').modal('show').html(response.data)
            })
            .catch(function (error) {
                toastr.error(error.response.data.message);
            })
    }
</script>
