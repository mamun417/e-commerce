<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Eloquent
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
}
