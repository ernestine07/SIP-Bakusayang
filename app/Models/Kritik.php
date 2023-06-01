<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;
    public $table = "kritik";
    protected $fillable = [
        'tanggal',
        'users_id',
        'pesan'
    ];
    public function user (){
        return $this->hasMany('App\Models\User', 'users_id', 'id');
    }
}
