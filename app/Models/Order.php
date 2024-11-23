<?php

namespace App\Models;

use App\Observers\OrderObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(OrderObserver::class)]

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'TotalPrice',
        'OrderDate',
        'delivery_status'
    ];

//    protected static function booted(): void
//    {
//        static::observe(OrderObserver::class);
//    }

    public function product()
    {
        return $this->belongsTo(Product::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

