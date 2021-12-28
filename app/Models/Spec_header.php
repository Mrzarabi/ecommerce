<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spec_header extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'spec_id',

        'title',
        'body',
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
     * Get the spec that owns the spec header.
     */
    public function spec()
    {
        return $this->belongsTo(Spec::class);
    }

    /**
     * Get the spec rows for the blog header.
     */
    public function spec_rows()
    {
        return $this->hasMany(Spec_row::class);
    }
}
