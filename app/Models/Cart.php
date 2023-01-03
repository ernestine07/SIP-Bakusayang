<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = [
        'menu_id',
        'qty',
        'nama_cust',
        'total',
    ];

    protected $guarded = [
        'id'
    ];
    public function menu (){
        return $this->belongsTo('App\Models\menu', 'menu_id', 'id');
        // return $this->hasMany(menu::class);
    }

    public function harga (){
        return $this->belongsTo('App\Models\menu', 'menu_id', 'id');
        // return $this->hasMany(menu::class);
    }

    public function user() {
        return $this->belongsTo('App\Models\User','user_id');
    }

    // public function detail() {
    //     return $this->hasMany('App\Models\CartDetail', 'cart_id');
    // }


}
