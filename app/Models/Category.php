<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = [
        'id'
    ];

    public function products():HasMany {

        return $this->hasMany(Product::class);
    }

    public function getName()
    {
        $locale = app()->getLocale();
        if ($locale == 'en') {
            return $this->name;
        } elseif ($locale == 'ru') {
            return $this->name_ru ?: $this->name;
        } else {
            return $this->name;
        }
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }


    public function child()
    {
        return $this->hasMany(self::class, 'parent_id')
            ->orderBy('sort_order')
            ->orderBy('name');
    }


    public function getParentName()
    {
        if ($this->parent_id) {
            return $this->parent->getParentName() . ', ' . $this->getName();
        } else {
            return $this->getName();
        }
    }


    public $timestamps = false;
}
