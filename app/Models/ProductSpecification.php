<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
    protected $fillable = [
        'product_id', 
        'title', 
        'description', 
        'sort_order', 
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
