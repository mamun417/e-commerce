@extends('admin.layouts.app')
@section('title', 'Products')

@push('extra-links')
    <link href="{{ asset('backend/js/extra-plugin/lightbox-gallery/css/lightgallery.css') }}" rel="stylesheet">
@endpush

@push('extra-scripts')
    <!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="{{ asset('backend/js/extra-plugin/lightbox-gallery/js/lightgallery-all.min.js') }}"></script>
@endpush

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.products.index') }}">Products</a>
                </li>
                <li class="active">
                    <strong>Index</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All Product</h5>
                        <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-primary pull-right">
                            <i class="fa fa-plus"></i> <strong>Create</strong>
                        </a>
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ route('admin.products.index') }}" method="get"
                                      class="form-inline" role="form">

                                    <div class="form-group">
                                        <div>Records Per Page</div>
                                        <select name="perPage" id="perPage" onchange="submit()"
                                                class="input-sm form-control" style="width: 115px;">
                                            <option value="10"{{ request('perPage') == 10 ? ' selected' : '' }}>
                                                10
                                            </option>
                                            <option value="25"{{ request('perPage') == 25 ? ' selected' : '' }}>
                                                25
                                            </option>
                                            <option value="50"{{ request('perPage') == 50 ? ' selected' : '' }}>
                                                50
                                            </option>
                                            <option value="100"{{ request('perPage') == 100 ? ' selected' : '' }}>
                                                100
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div>Select Type</div>
                                        <select name="type" id="perPage" onchange="submit()"
                                                class="input-sm form-control">
                                            <option value="">All</option>

                                            @foreach(\App\Models\Product::getTypes() as $type_name => $display_name)
                                                <option value="{{ $type_name }}"
                                                    {{ request('type') == $type_name ? ' selected' : '' }}>
                                                    {{ $display_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <div class="input-group">
                                            <input name="keyword" type="text" value="{{ request('keyword') }}"
                                                   class="input-sm form-control" placeholder="Search Here">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-sm btn-primary"> Go!</button>
                                            </span>
                                        </div>
                                        <a href="{{ route('admin.products.index') }}"
                                           class="btn btn-default btn-sm">Reset</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="table-responsive m-t-md">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="text-left">Name</th>
                                    <th class="text-left">Category</th>
                                    <th class="text-left">Brand</th>
                                    <th>Price</th>
                                    <th class="">Quantity</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Create At</th>
                                    <th class="text-center" width="20%">Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td class="text-left">
                                            <span title="{{ ucfirst($product->name) }}">
                                                {{ Str::limit(ucfirst($product->name), 35) }}
                                            </span>
                                        </td>
                                        <td class="text-left">{{ ucfirst(@$product->category->name) }}</td>
                                        <td class="text-left">{{ ucfirst(@$product->brand->name ?? '') }}</td>
                                        <td class="text-left">
                                            <p>Regular: {{ $product->selling_price }} TK</p>
                                            <p>Discount: {{ $product->discount_price }} TK</p>
                                        </td>
                                        <td>{{ ucfirst($product->quantity) }}</td>

                                        <td>
                                            <div class="lightgallery">

                                                @foreach(\App\Models\Product::getImagesColumns() as $image)
                                                    <a class="{{ $loop->first ? '' : 'hidden' }}"
                                                       href="{{ getImageUrl($product->$image) }}">

                                                        <img src="{{ getImageUrl($product->$image) }}"
                                                             alt="{{ $product->name }}"
                                                             class="{{ $loop->first ? 'img-md' : '' }}">
                                                    </a>
                                                @endforeach
                                            </div>
                                        </td>

                                        <td>
                                            <a onclick="changeStatus(this)" id="{{ $product->id }}"
                                               route="{{ route('admin.products.status.change', '') }}"
                                               href="javascript:void(0)"
                                               title="Change publication status">
                                                @if($product->status)
                                                    <span class="badge badge-primary"><strong>Active</strong></span>
                                                @else
                                                    <span class="badge badge-warning"><strong>Disable</strong></span>
                                                @endif
                                            </a>
                                        </td>

                                        <td>{{ cus_date($product->created_at) }}</td>

                                        <td>
                                            <button onclick="showProduct({{ $product->id }})"
                                                    title="View" class="btn btn-success btn-xs">
                                                <i class="fa fa-eye"></i> <strong>View</strong>
                                            </button>

                                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                               title="Edit" class="btn btn-info btn-xs">
                                                <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                            </a>

                                            <a onclick="deleteRow({{ $product->id }})" href="JavaScript:void(0)"
                                               title="Delete" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash"></i> <strong>Delete</strong>
                                            </a>

                                            <form id="row-delete-form{{ $product->id }}" method="POST"
                                                  action="{{ route('admin.products.destroy', $product->id) }}"
                                                  style="display: none">
                                                @method('DELETE')
                                                @csrf()
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        @if (count($products))
                            <div class="dataTables_info table-pagination" id="DataTables_Table_0_info" role="status"
                                 aria-live="polite">
                                <div class="m-r-lg">
                                    Showing {{ $products->firstItem() }} to {{ $products->lastItem() }}
                                    of {{ $products->total() }} entries
                                </div>
                                {{
                                    $products->appends([
                                        'perPage' => request('perPage'),
                                        'type' => request('type'),
                                        'keyword' => request('keyword')
                                    ])->links()
                                }}
                            </div>
                        @else
                            <div class="text-center">No products found</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.product.view-modal', ['product' => $products[0]])

@endsection()

@section('custom-js')
    <script>
        $(function () {
            $(".lightgallery").lightGallery();
        });

        function showProduct(id) {
            axios.get('{{ route('admin.products.show', '') }}/' + id)
                .then(function (response) {
                    $('.view-product-modal').html(response.data)
                    $('#productViewModal').modal('show')
                })
                .catch(function (error) {
                    console.log(error);
                })
        }
    </script>
@endsection
