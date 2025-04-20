<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBundle extends Model
{
    protected $fillable = [
        'name',
        'description',
        'thumbnail',
    ];
}
