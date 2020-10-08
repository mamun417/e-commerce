<?php

namespace App\Http\Controllers\Admin\Helper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryHelper extends Controller
{
    /**
     * remove parent or nested children category by id
     * @param $categories
     * @param $id
     * @return mixed
     */
    public static function removeCategoryById($categories, $id)
    {
        foreach ($categories as $key => $category) {
            if (count($category->children)) {
                self::removeCategoryById($category->children, $id);
            }

            if ($category->id === $id) {
                unset($categories[$key]);
            }
        }

        return $categories;
    }
}
