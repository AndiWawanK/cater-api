<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSummary extends Model
{
    use HasFactory;
    protected $table = 'order_summary';
    
    protected $fillable = [
        'order_id',
        'product_detail_id',
        'status'
    ];
}
