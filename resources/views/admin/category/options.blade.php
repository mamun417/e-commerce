@if ($category->isParent())
    <option value="{{ $category->id }}">
        {{ $category->name }}
    </option>
@endif

@foreach($category->children as $category)

    <option value="{{ $category->id }}">
        {{ "---$loop->depth---" }}
        {!! str_repeat('&nbsp;', $loop->depth). '-- '.$category->name !!}
    </option>

    @if (count($category->children))
        @include('admin.category.options', ['category' => $category])
    @endif

@endforeach



