<?php

namespace App\Http\Controllers\Partial\Helper;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryHelper extends Controller
{
    /**
     * Get parents categories list default included disable category
     * @param bool $disable
     * @return mixed
     */
    public static function getMainCategories($disable = true)
    {
        $paren_categories = Category::latest()->with('children')->parentCategory();

        if (!$disable) {
            $paren_categories = $paren_categories->active();
        }

        return $paren_categories->get();
    }

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

    /**
     * Get  parent categories (included nested)
     * @param $category_id
     * @return array
     */
    public static function getParentCategories($category_id): array
    {
        $category = Category::find($category_id);

        $parents = [];

        $parent = $category->parent;

        while (!is_null($parent)) {
            $parents[] = $parent;
            $parent = $parent->parent;
        }

        return $parents;
    }

    /**
     * Get child categories (included nested)
     * @param $slug
     * @return array
     */
    public function getChildCategories($slug): array
    {
        $category = Category::whereSlug($slug)->first();

        $child_categories = $this->makeChildCategoryList($category);

        dd($child_categories);

        return $child_categories;
    }

    private function makeChildCategoryList($category): array
    {
        info($category->toArray());
        $child_categories = [];

        $childs = $category->children;

        foreach ($childs as $item) {

            $child_categories[] = $item->toArray();

            if (count($item->children)) {

//                info('ok');

                $this->makeChildCategoryList($item);

//                foreach ($item->children as $nested_item) {
//                    $child_categories[] = $nested_item->toArray();
//                }
            }
        }

        return $child_categories;
    }
}
