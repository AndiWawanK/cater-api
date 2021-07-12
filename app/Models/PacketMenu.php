<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacketMenu extends Model
{
    use HasFactory;
    protected $table = 'product_detail';
    
    protected $fillable = [
        'product_id',
        'day_id',
        'eating_time_id',
        'food_name',
        'image',
        'description'
    ];
}
