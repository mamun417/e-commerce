<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($param)
 * @method static latest()
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
    const INACTIVE = '0';

    protected $fillable = ['status', 'name', 'slug', 'parent_id', 'image'];

    public function scopeActive($query)
    {
        return $query->where('status', self::ACTIVE);
    }

    public function scopeParentCategory($query)
    {
        return $query->where('parent_id', 0);
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

    public static function getParentCategories()
    {
        return Category::latest()->with('children')->parentCategory()->get();
    }
}
