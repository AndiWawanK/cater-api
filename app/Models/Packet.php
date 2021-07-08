<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    use HasFactory;

    protected $table = 'products';
    
    protected $fillable = [
        'merchant_id',
        'category_id',
        'name',
        'subscription',
        'price',
        'discount',
        'description',
        'status',
        'package_type'
    ];

    public function merchant_detail(){
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }

    public function menu(){
        return $this->hasMany(Food::class, 'product_id');
    }
}
