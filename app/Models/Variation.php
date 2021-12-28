<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',

        'number',
        'unit',
        'off',
        'off_start',
        'off_end',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'off',
        'off_start',
        'off_end'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    //* Relations

    /**
     * Get the product that owns the variation.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the features for the blog variation.
     */
    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
