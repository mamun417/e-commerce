<?php

namespace App\Providers;

use App\Http\Controllers\Partial\Helper\BrandHelper;
use App\Http\Controllers\Partial\Helper\CategoryHelper;
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
            $parent_categories = CategoryHelper::getMainCategories();
            $view->with('parent_categories', $parent_categories);
        });

//        View::composer(['pages.products'], function ($view) {
//            $brands = BrandHelper::getBrands(false);
//            $view->with('brands', $brands);
//        });
    }
}
