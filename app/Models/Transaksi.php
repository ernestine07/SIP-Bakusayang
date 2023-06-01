<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
        'no_invoice',
        'users_id',
        'menu',
        'nama_pelanggan',
        'status_pembayaran',
        'status_order',
        'diskon',
        'subtotal'
    ];
    protected $casts = [
        'menu' => 'array'
    ];
    public function cart()
    {
        return $this->belongsTo('App\Cart', 'cart_id');
    }

    public function menu()
    {
        return $this->belongsTo('App\menu', 'menu_id');
    }

    // function untuk update qty, sama subtotal
    public function updatedetail($itemdetail, $qty, $harga, $diskon)
    {
        $this->attributes['qty'] = $itemdetail->qty + $qty;
        $this->attributes['subtotal'] = $itemdetail->subtotal + ($qty * ($harga - $diskon));
        self::save();
    }

    public function getByAccount($account_id)
{
   $transactions = DB::table('transaksi')
                  ->where('2', $account_id)
                  ->get();
   
   return $transactions;
}

}
