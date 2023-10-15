<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Color extends Model
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

    public $timestamps = false;
}
