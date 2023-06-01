<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    public $table = "menu";
    protected $fillable = [
        'nama_menu',
        'kategori_id',
        'harga',
        'foto_produk'
    ];
    public function cart (){
        return $this->hasMany('App\Models\Cart', 'cart_id', 'id');
    }


}
