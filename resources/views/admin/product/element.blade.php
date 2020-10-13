<div class="col-sm-6">
    <div class="form-group">
        <label>Name</label><span class="required-star"> *</span>
        <input name="name" value="{{ isset($update) ? $product->name : old('name') }}" type="text"
               placeholder="Enter product name" class="form-control">

        @error('name')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Category</label><span class="required-star"> *</span>
        <select class="form-control" name="category_id">
            <option value="">None</option>
            @foreach($parent_categories as $parent_category)
                @include('admin.category.component.tree-options', ['parent_category' => $parent_category])
            @endforeach
        </select>

        @error('category_id')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Quantity</label><span class="required-star"> *</span>
        <input name="quantity" value="{{ isset($update) ? $product->name : old('name') }}" type="text"
               placeholder="Enter product quantity" class="form-control">

        @error('quantity')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Selling Price</label><span class="required-star"> *</span>
        <input name="selling_price" value="{{ isset($update) ? $product->slug : old('slug') }}" type="number"
               placeholder="Enter product selling price" class="form-control">

        @error('selling_price')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Discount Price</label>
        <input name="discount_price" value="{{ isset($update) ? $product->slug : old('slug') }}" type="number"
               placeholder="Enter product discount price" class="form-control">

        @error('discount_price')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="summernote form-control"></textarea>

        @error('description')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label>Slug</label>
        <input name="slug" value="{{ isset($update) ? $product->slug : old('slug') }}" type="text"
               placeholder="Enter product slug" class="form-control">

        @error('slug')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Brand</label>
        <select class="form-control" name="brand_id">
            <option>None</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>

        @error('brand_id')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group" id="tokenize_section">
        <label>Color</label>
        <select name="color[]" class="color" multiple>
            @if (old('color'))
                @foreach(old('color') as $color)
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
            @if (old('size'))
                @foreach(old('size') as $size)
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
        <input name="video_link" value="{{ isset($update) ? $product->slug : old('slug') }}" type="text"
               placeholder="Enter product video link" class="form-control">

        @error('video_link')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    @foreach ([1, 2, 3] as $user)
        <div class="form-group">
            <label>Image</label>
            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                <div class="form-control" data-trigger="fileinput">
                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                    <span class="fileinput-filename"></span>
                </div>
                <span class="input-group-addon btn btn-default btn-file">
                <span class="fileinput-new">Select file</span>
                <span class="fileinput-exists">Change</span>
                    <input type="file" name="img_one"/>
                </span>

                <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                   data-dismiss="fileinput">Remove</a>

                @error('img_one')
                <span class="help-block m-b-none text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    @endforeach

    <div class="form-group">
        <label class="checkbox-inline i-checks">
            <input name="main_slider" type="checkbox" value="option1"> Main Slider
        </label>

        <label class="checkbox-inline i-checks">
            <input name="hot_deal" type="checkbox" value="option2"> Hot Deal
        </label>

        <label class="checkbox-inline i-checks">
            <input name="best_rated" type="checkbox" value="option3"> Best Rated
        </label>

        <label class="checkbox-inline i-checks">
            <input name="mid_slider" type="checkbox" value="option3"> Mid Slider
        </label>

        <label class="checkbox-inline i-checks">
            <input name="hot_new" type="checkbox" value="option3"> Hot New
        </label>

        <label class="checkbox-inline i-checks">
            <input name="trend" type="checkbox" value="option3"> Trend
        </label>
    </div>

    <div class="form-group m-b-none">
        <a href="{{ route('admin.categories.index') }}"
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
