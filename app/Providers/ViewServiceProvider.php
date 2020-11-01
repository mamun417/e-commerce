<?php

namespace App\Providers;

use App\Http\View\Composers\CategoryComposer;
use App\Models\Category;
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
        View::composer('pages.home', function ($view) {
            $parent_categories = Category::getParentCategories();
            $view->with('parent_categories', $parent_categories);
        });
    }
}
