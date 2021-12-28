<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
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

    //* Relations

    /**
     * Get the category that owns the spec.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the spec headers for the blog spec.
     */
    public function spec_headers()
    {
        return $this->hasMany(Spec_header::class);
    }

    /**
     * Get the spec rows for the blog spec.
     */
    public function spec_rows()
    {
        return $this->hasMany(Spec_row::class);
    }
}
