<?php

namespace App\Providers;

use App\Http\View\Composers\CategoryComposer;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('components.home.main-category.category', function ($view) {
            $parent_categories = Category::getParentCategories();
            $view->with('parent_categories', $parent_categories);
        });

        View::composer('components.home.banner', function ($view) {
            $slider_product = Product::whereMainSlider(1)->active()->latest()->first();
            $view->with('slider_product', $slider_product);
        });
    }
}
