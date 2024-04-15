<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // If you have a different table name, specify it here. By default, Laravel assumes the table name is the plural form of the model name.
    protected $table = 'products';

    // Enable mass assignment for these fields
    protected $fillable = ['name', 'price', 'image', 'description', 'category_id'];

    // If you need to hide any attributes from arrays
    protected $hidden = [];

    // If you have date fields other than created_at and updated_at,
    // you might want to specify them in the $dates attribute for better date handling
    protected $dates = ['created_at', 'updated_at'];

    // Setting up relationships, assuming you have categories
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Example of an accessor
    public function getFormattedPriceAttribute()
    {
        return '$' . number_format($this->price, 2);
    }

    // Example of a scope to get expensive products
    public function scopeExpensive($query)
    {
        return $query->where('price', '>', 1000);
    }
}
