@php($check_selected_id = isset($update) ? $category->parent_id : old('category'))

@if ($parent_category->isParent())
    <option value="{{ $parent_category->id }}" {{ $check_selected_id == $parent_category->id ? 'selected' : '' }}>
        {{ $parent_category->name }}
    </option>
@endif

@foreach($parent_category->children as $parent_category)

    <option value="{{ $parent_category->id }}" {{ $check_selected_id == $parent_category->id ? 'selected' : '' }}>
        {!! str_repeat('&nbsp;', ($loop->depth-1)*3).$parent_category->name !!}
    </option>

    @if (count($parent_category->children))
        @include('admin.category.component.tree-options', ['parent_category' => $parent_category])
    @endif

@endforeach

