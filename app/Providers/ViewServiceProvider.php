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
        View::composer(['components.header', 'components.home.popular-category'], function ($view) {
            $parent_categories = Category::getMainCategories();
            $view->with('parent_categories', $parent_categories);
        });
    }
}
