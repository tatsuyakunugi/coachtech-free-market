<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'condition_id',
        'image_path',
        'name',
        'price',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }
}
