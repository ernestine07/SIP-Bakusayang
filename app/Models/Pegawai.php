<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    public $table = "pegawai";
    protected $fillable = [
        'nama_pegawai',
        'no_telp',
        'user_id',
        'foto',
    ];
}
