<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($param)
 * @method static latest()
 * @method static find(int $int)
 * @property mixed parent_id
 * @property mixed parent
 * @property mixed id
 * @property mixed image
 * @property mixed status
 */
class Category extends Model
{
    const PARENT_CATEGORY = '0';
    const IMAGE_PATH = 'category';
    const ACTIVE = '1';
    const DISABLE = '0';

    protected $fillable = ['status', 'name', 'slug', 'parent_id', 'image'];

    public function scopeActive($query)
    {
        return $query->where('status', self::ACTIVE);
    }

    public function scopeParentCategory($query)
    {
        return $query->where('parent_id', self::PARENT_CATEGORY);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function isParent()
    {
        return $this->parent_id == Category::PARENT_CATEGORY;
    }

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
     * Get nested parent categories
     * @param $category_id
     * @return array
     */
    public static function getParentCategories($category_id)
    {
        $category = Category::find($category_id);

        $parents = [];

        $parent = $category->parent;

        while(!is_null($parent)) {
            $parents[] = $parent;
            $parent = $parent->parent;
        }

        return $parents;
    }
}
