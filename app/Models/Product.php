<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; // تعطيل timestamps
    protected $fillable = ['category_id', 'name', 'description', 'price', 'stock_quantity', 'image']; // الحقول التي يمكن تعبئتها


    // العلاقات
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

