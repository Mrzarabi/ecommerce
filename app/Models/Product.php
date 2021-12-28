<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'brnad_id',
        'discount_id',

        'name',
        'body',
        'is_buy_next',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_buy_next' => 'boolean',
    ];

    //* Relations

    /**
     * Get the brand that owns the product.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the discount that owns the product.
     */
    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }

    /**
     * Get the variations for the blog product.
     */
    public function variations()
    {
        return $this->hasMany(Variation::class);
    }

    /**
     * Get the images for the blog product.
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
