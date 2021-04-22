<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    
    protected $fillable = [
        'merchant_id',
        'name',
        'subscription',
        'price',
        'discount',
        'description',
        'status',
        'package_type'
    ];
}
