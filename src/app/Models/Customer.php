<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shipping_post_code',
        'shipping_address',
        'shipping_building',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
