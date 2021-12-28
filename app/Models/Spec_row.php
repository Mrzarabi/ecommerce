<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spec_row extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'spec_id',
        'spec_header_id',

        'title',
        'value',
        'help',
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
     * Get the spec that owns the spec row.
     */
    public function spec()
    {
        return $this->belongsTo(Spec::class);
    }

    /**
     * Get the spec header that owns the spec row.
     */
    public function spec_header()
    {
        return $this->belongsTo(Spec_header::class);
    }

    
    /**
     * Get the spec data for the blog spec row.
     */
    public function spec_data()
    {
        return $this->hasMany(spec_data::class);
    }
}
