<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spec_data extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'spec_row_id',
        'product_id',
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
     * Get the product that owns the spec data.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the spec row that owns the spec data.
     */
    public function spec_row()
    {
        return $this->belongsTo(Spec_row::class);
    }
}
