@if ($category->isParent())
    <option value="{{ $category->id }}" {{ old('parent_id') == $category->id ? 'selected' : '' }}>
        {{ $category->name }}
    </option>
@endif

@foreach($category->children as $category)

    <option value="{{ $category->id }}" {{ old('parent_id') == $category->id ? 'selected' : '' }}>
        {!! str_repeat('&nbsp;', ($loop->depth-1)*3).$category->name !!}
    </option>

    @if (count($category->children))
        @include('admin.category.component.tree-options', ['category' => $category])
    @endif

@endforeach



