<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id', 'title', 'introduction', 'description', 'image', 'Price', 'quantity', 'weight',
    ];
}
