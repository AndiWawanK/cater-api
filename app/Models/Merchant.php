<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $table = 'merchants';
    
    protected $fillable = [
        'user_id',
        'merchant_name',
        'merchant_level',
        'banner',
        'province_code',
        'status',
        'rating',
        'description'
    ];

    public function user_detail(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function packet(){
        return $this->hasMany(Packet::class);
    }
}
