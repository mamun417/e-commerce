<div class="form-group">
    <label>Name</label><span class="required-star"> *</span>
    <input name="name" value="{{ old('name') }}" type="text" placeholder="Enter category name" class="form-control">

    @error('name')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Slug</label><span class="required-star"> *</span>
    <input name="slug" value="{{ old('slug') }}" type="text" placeholder="Enter category slug" class="form-control">

    @error('slug')
    <span class="help-block m-b-none text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Parent Category</label>
    <select class="form-control" name="parent_id">
        <option value="0">None</option>
        @foreach($categories as $category)
            @if ($category->)

            @endif
            <option {{ old('parent_id') === $category->id ? 'selected' : '' }} value="">{{ $category->name }}</option>
        @endforeach
    </select>
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

<div>
    <button class="btn btn-sm btn-primary" type="submit">
        <strong>Submit</strong>
    </button>
</div>
