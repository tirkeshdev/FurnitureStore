<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Seller extends Model
{
    protected $guarded = [
        'id'
    ];



    public function location():BelongsTo {

        return $this->belongsTo(Location::class);

    }

    public $timestamps = false;
}
