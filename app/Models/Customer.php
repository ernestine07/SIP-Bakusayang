<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $table = "customer";
    protected $fillable = [
        'nama_customer',
        'jeniskelamin',
        'alamat',
        'no_telepon',
        'users_id',
        'foto',
    ];
}
