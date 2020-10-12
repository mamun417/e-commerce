<div class="col-sm-6">
    <div class="form-group">
        <label>Name</label><span class="required-star"> *</span>
        <input name="name" value="{{ isset($update) ? $category->name : old('name') }}" type="text"
               placeholder="Enter category name" class="form-control">

        @error('name')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Slug</label><span class="required-star"> *</span>
        <input name="slug" value="{{ isset($update) ? $category->slug : old('slug') }}" type="text"
               placeholder="Enter category slug" class="form-control">

        @error('slug')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="parent_id">
            <option value="0">None</option>
            @foreach($parent_categories as $parent_category)
                @include('admin.category.component.tree-options', ['parent_category' => $parent_category])
            @endforeach
        </select>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label>Name</label><span class="required-star"> *</span>
        <input name="name" value="{{ isset($update) ? $category->name : old('name') }}" type="text"
               placeholder="Enter category name" class="form-control">

        @error('name')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Slug</label><span class="required-star"> *</span>
        <input name="slug" value="{{ isset($update) ? $category->slug : old('slug') }}" type="text"
               placeholder="Enter category slug" class="form-control">

        @error('slug')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="parent_id">
            <option value="0">None</option>
            @foreach($parent_categories as $parent_category)
                @include('admin.category.component.tree-options', ['parent_category' => $parent_category])
            @endforeach
        </select>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label>Description</label>
        <textarea name="body" class="summernote form-control"></textarea>

        @error('name')
        <span class="help-block m-b-none text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-sm-6">
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
            <input type="file" name="img"/>
        </span>

            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>

            @error('img')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

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
            <input type="file" name="img"/>
        </span>

            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>

            @error('img')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

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
            <input type="file" name="img"/>
        </span>

            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>

            @error('img')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="checkbox-inline i-checks">
            <input type="checkbox" value="option1"> Main Slider
        </label>
        <label class="checkbox-inline i-checks">
            <input type="checkbox" value="option2"> hot_deal
        </label>
        <label class="checkbox-inline i-checks">
            <input type="checkbox" value="option3"> best_rated
        </label>
        <label class="checkbox-inline i-checks">
            <input type="checkbox" value="option3"> mid_slider
        </label>

        <label class="checkbox-inline i-checks">
            <input type="checkbox" value="option3"> hot_new
        </label>

        <label class="checkbox-inline i-checks">
            <input type="checkbox" value="option3"> trend
        </label>
    </div>

    <div class="form-group m-b-none">
        <a href="{{ route('admin.categories.index') }}"
           class="btn btn-sm btn-danger"><strong>Cancel</strong></a>
        <button class="btn btn-sm btn-primary" type="submit"><strong>{{ isset($update) ? 'Update' : 'Submit' }}</strong>
        </button>
    </div>
</div>
