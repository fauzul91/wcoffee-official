<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductPhoto extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'product_id',
        'photo',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
