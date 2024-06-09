<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    public $table = 'produk';
    public $primaryKey = 'produkID';

    protected $fillable = [
        'namaProduk',
        'harga',
        'stock',
        'deskripsi',
        'gambar',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class, 'produkID', 'produkID');
    }
}
