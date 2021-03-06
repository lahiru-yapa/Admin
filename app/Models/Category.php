<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'status',
        'image'

    ];
    public function images()
    {
        return $this->hasOne(Image::class, 'id', 'image');
    }

    function items()
    {
        return $this->hasMany(Item::class, 'id', 'Item');
    }
}
