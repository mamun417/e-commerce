<div class="cat_menu_container">
    <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
        <div class="cat_burger"><span></span><span></span><span></span></div>
        <div class="cat_menu_text">categories</div>
    </div>

    <ul class="cat_menu">
        @foreach($parent_categories as $category)
            @include('elements.main-category.tree-category')
        @endforeach
    </ul>
</div>
