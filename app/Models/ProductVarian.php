<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVarian extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'product_id',
        'category_id',
        'price',
        'stock',
        'description',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function canDelete(Model $record): bool
    {
        return \App\Models\ProductVarian::where('category_id', $record->id)->count() === 0 || \App\Models\ProductVarian::where('product_id', $record->id)->count() === 0;
    }
}
