<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TransactionHistory extends Model
{
    use HasFactory;
    protected $table = 'TransactionHistory';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'THID';

    protected $fillable = [
        'THID',
        'userID',
        'produkID',
        'order_id',
        'totalHarga',
        'status',
        'snapToken',
    ];

    protected $hidden = [];

    protected $casts = [
        'produkID' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    /**
     * Kita override getIncrementing method
     *
     * Menonaktifkan auto increment
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * Kita override getKeyType method
     *
     * Memberi tahu laravel bahwa model ini menggunakan primary key bertipe string
     */
    public function getKeyType()
    {
        return 'string';
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }
}
