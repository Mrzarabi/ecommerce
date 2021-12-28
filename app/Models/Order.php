<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'discount_id',

        'total',
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
     * Get the user that owns the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Get the discount that owns the order.
     */
    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
    
    /**
     * Get the order items for the blog order.
     */
    public function order_items()
    {
        return $this->hasMany(Order_item::class);
    }
}
