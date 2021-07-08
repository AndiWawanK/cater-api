<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    
    protected $fillable = [
        'booking_id',
        'customer_id',
        'merchant_id',
        'product_id',
        'note',
        'order_fee',
        'total_price',
        'status',
        'latitude',
        'longitude',
        'address',
        'portion',
        'subscription',
        'ends_at',
    ];

    public function merchant(){
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }

    public function packet(){
        return $this->belongsTo(Packet::class, 'product_id');
    }
    
    public function customer(){
        return $this->hasMany(User::class, 'customer_id');
    }
    // public function packet(){}
}
