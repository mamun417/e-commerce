@if (!count($category->children))
    <li>
        <a href="#">{{ $category->name }} <i class="fas fa-chevron-right ml-auto"></i></a>
    </li>
@else
    <li class="hassubs">
        <a href="#">{{ $category->name }}<i class="fas fa-chevron-right"></i></a>
        <ul>
            @foreach($category->children as $category)
                @include('components.main-category.resources.views.components.main-category.tree-category')
            @endforeach
        </ul>
    </li>
@endif

