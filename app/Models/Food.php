<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'product_detail';
    
    protected $fillable = [
        'product_id',
        'food_name',
        'image',
        'description'
    ];

    public function packet(){
        return $this->belongsTo(Packet::class, 'product_id');
    }
}
