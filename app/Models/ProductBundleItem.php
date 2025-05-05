<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBundleItem extends Model
{
    protected $fillable = [
        'product_bundle_id',
        'product_varian_id',
        'promo_id',
        'price',
        'quantity',
    ];

    public function productBundle()
    {
        return $this->belongsTo(ProductBundle::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function promo()
    {
        return $this->belongsTo(Promo::class);
    }
}
