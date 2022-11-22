<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    protected $table = 'cart_detail';
    protected $fillable = [
            'user_id',
            'menu_id',
            'status_cart',
            'status_pembayaran',
            'total',
            'diskon',
            'subtotal'
        ];

    public function cart() {
        return $this->belongsTo('App\Cart', 'cart_id');
    }

    public function menu() {
        return $this->belongsTo('App\menu', 'menu_id');
    }

    // function untuk update qty, sama subtotal
    public function updatedetail($itemdetail, $qty, $harga, $diskon) {
        $this->attributes['qty'] = $itemdetail->qty + $qty;
        $this->attributes['subtotal'] = $itemdetail->subtotal + ($qty * ($harga - $diskon));
        self::save();
    }
}
