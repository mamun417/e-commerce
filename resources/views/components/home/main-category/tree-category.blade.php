@if (!count($category->children))
    <li>
        <a href="{{ route('product-by-category', $category->slug) }}">
            {{ $category->name }} <i class="fas fa-chevron-right ml-auto"></i>
        </a>
    </li>
@else
    <li class="hassubs">
        <a href="{{ route('product-by-category', $category->slug) }}">
            {{ $category->name }} <i class="fas fa-chevron-right"></i>
        </a>
        <ul>
            @foreach($category->children as $category)
                @include('components.home.main-category.tree-category')
            @endforeach
        </ul>
    </li>
@endif

