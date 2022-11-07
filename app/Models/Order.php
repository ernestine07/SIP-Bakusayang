<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'cart_id'
    ];

    public function cart() {
        return $this->belongsTo('App\Models\Cart', 'cart_id');
    }
}
