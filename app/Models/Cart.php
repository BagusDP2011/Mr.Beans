<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';

    protected  $primaryKey = 'cartID';

    protected $fillable = [
        'userID',
        'produkID',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'produkID', 'produkID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }

}
