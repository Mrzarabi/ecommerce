<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'depth',
        'path',
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
    protected $casts = [];

    //* Realtions

    /**
     * Get the products for the blog category.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the specs for the blog category.
     */
    public function specs()
    {
        return $this->hasMany(Spec::class);
    }
}
