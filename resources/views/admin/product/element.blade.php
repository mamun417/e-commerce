@push('extra-links')
    <link href="{{ asset('backend/css/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet">
@endpush

<div class="col-sm-4">
    <div class="form-group">
        <label>Name</label><span class="required-star"> *</span>
        <input name="name" value="{{ isset($update) ? $product->name : old('name') }}" type="text"
               placeholder="Enter product name" class="form-control" required>

        @error('name')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Category</label><span class="required-star"> *</span>
        <select class="form-control" name="category_id" required>
            <option value="">None</option>
            @foreach($parent_categories as $parent_category)
                @include('admin.category.component.tree-options',
                    [
                        'parent_category' => $parent_category,
                        'selected_item_cat_id' => isset($update) ? $product->category_id : 0,
                        'input_name' => 'category_id'
                    ]
                )
            @endforeach
        </select>

        @error('category_id')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Quantity</label><span class="required-star"> *</span>
        <input name="quantity" value="{{ isset($update) ? $product->quantity : old('quantity') }}" type="number"
               placeholder="Enter product quantity" class="form-control" required>

        @error('quantity')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-sm-4">
    <div class="form-group">
        <label>Selling Price</label><span class="required-star"> *</span>
        <input name="selling_price" value="{{ isset($update) ? $product->selling_price : old('selling_price') }}"
               type="number"
               placeholder="Enter product selling price" class="form-control" required>

        @error('selling_price')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Discount Price</label>
        <input name="discount_price" value="{{ isset($update) ? $product->discount_price : old('discount_price') }}"
               type="number"
               placeholder="Enter product discount price" class="form-control">

        @error('discount_price')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Brand</label>
        <select class="form-control" name="brand_id">
            <option value="">None</option>
            @php($check_selected_id = isset($update) ? $product->brand_id : old('brand_id'))
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}" {{ $check_selected_id == $brand->id ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>

        @error('brand_id')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-sm-4">
    <div class="form-group" id="tokenize_section">
        <label>Color</label>
        <select name="color[]" class="color" multiple>
            @if (old('color') || isset($update))
                @php($colors = isset($update) ? (json_decode($product->color, true) ?? []) : old('color'))

                @foreach($colors as $color)
                    <option value="{{ $color }}" selected>{{ $color }}</option>
                @endforeach
            @endif
        </select>

        @error('color')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group" id="tokenize_section">
        <label>Size</label>
        <select name="size[]" class="size" multiple>
            @if (old('size') || isset($update))
                @php($sizes = isset($update) ? (json_decode($product->size, true) ?? []) : old('size'))

                @foreach($sizes as $size)
                    <option value="{{ $size }}" selected>{{ $size }}</option>
                @endforeach
            @endif
        </select>

        @error('size')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Video Link</label>
        <input name="video_link" value="{{ isset($update) ? $product->video_link : old('video_link') }}" type="text"
               placeholder="Enter product video link" class="form-control">

        @error('video_link')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-sm-12">
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="summernote form-control">
            {{ isset($update) ? $product->description : old('description') }}
        </textarea>

        @error('description')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-sm-6">
    @foreach (\App\Models\Product::getImagesColumns() as $key => $image)
        <div class="form-group">
            <label>Image @if($loop->first) (Main Thumbnail) @endif</label>
            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                <div class="form-control" data-trigger="fileinput">
                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                    <span class="fileinput-filename"></span>
                </div>
                <span class="input-group-addon btn btn-default btn-file">
                <span class="fileinput-new">Select file</span>
                <span class="fileinput-exists">Change</span>
                    <input type="file" name="img[]">
                </span>

                <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                   data-dismiss="fileinput">Remove</a>
            </div>

            @error('img.'.$key)
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    @endforeach
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label>Type</label>
        <div class="">
            @foreach(\App\Models\Product::getTypes() as $type_name => $display_name)
                <label class="checkbox-inline i-checks">
                    <input name="{{ $type_name }}" type="checkbox" value="1"
                        {{
                            (isset($update) ?
                            array_key_exists($type_name, \App\Models\Product::getProductTypes($product))
                            : old($type_name)) ? 'checked' : ''
                        }}
                    >
                    {{ $display_name }}
                </label>
            @endforeach
        </div>
    </div>

    <div class="form-group m-b-none">
        <a href="{{ route('admin.products.index') }}"
           class="btn btn-sm btn-danger"><strong>Cancel</strong></a>
        <button class="btn btn-sm btn-primary" type="submit"><strong>{{ isset($update) ? 'Update' : 'Submit' }}</strong>
        </button>
    </div>
</div>

@section('custom-js')
    <script>
        $.each(['color', 'size'], function (key, tokenizeType) {
            $('.' + tokenizeType).tokenize2({
                dataSource: 'select',
                placeholder: 'Enter product ' + tokenizeType,
                sortable: true,
                tokensAllowCustom: true
            });
        })
    </script>
@endsection
