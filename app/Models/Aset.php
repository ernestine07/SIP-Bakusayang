<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;
    public $table = "asets";
    protected $fillable = [
        'nama_barang',
        'stok'
    ];
}
