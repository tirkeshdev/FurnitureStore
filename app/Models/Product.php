<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function brand():BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function material():BelongsTo
    {
        return $this->belongsTo(Material::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function color():BelongsTo
    {
        return $this->belongsTo(Color::class);
    }

    public function made():BelongsTo
    {
        return $this->belongsTo(Made::class);
    }

    public function size():BelongsTo
    {
        return $this->belongsTo(Size::class);
    }

    public function sellers():BelongsToMany {

        return $this->belongsToMany(Seller::class , 'product_sellers');

    }

    public function isDiscount()
    {
        if ($this->discount_percent > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getDiscountPercent()
    {
        if ($this->isDiscount()) {
            return $this->discount_percent;
        } else {
            return 0;
        }
    }

    public function getPrice()
    {
        return round($this->price * (1 - $this->getDiscountPercent() / 100), 1);
    }

    public $timestamps = false;
}
