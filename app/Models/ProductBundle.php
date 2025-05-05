<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBundle extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'thumbnail',
        'type',
    ];

    public function productBundleItems()
    {
        return $this->hasMany(ProductBundleItem::class);
    }
}
