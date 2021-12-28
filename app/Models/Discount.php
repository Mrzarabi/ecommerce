<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'body',
        'discount_start',
        'discount_end',
        'discount_quantity',
        'discount_value',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'discount_start',
        'discount_end',
        'discount_quantity',
        'discount_value',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'discount_start' => 'timestamp',
        'discount_end' => 'timestamp', 
    ];

    //* Realtions

    /**
     * Get the products for the blog discount.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
