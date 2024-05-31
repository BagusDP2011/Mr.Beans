<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    public $table = 'produk';

    public function carts()
    {
        return $this->hasMany(Cart::class, 'produkID', 'produkID');
    }
    public function transactionHistories()
    {
        return $this->belongsToMany(TransactionHistory::class, 'THID')
                    ->withPivot('quantity', 'price', 'created_at', 'updated_at');
    }
}
