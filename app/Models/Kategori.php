<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public $table = "kategoris";
    protected $fillable = [
        'nama_kategori',
    ];
    /**
     * Get all of the comments for the Kategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menu()
    {
        return $this->hasMany(menu::class, 'kategori_id', 'id');
    }
}
