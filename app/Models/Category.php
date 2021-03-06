<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Category extends Model
{
    use HasFactory;

    public $fillable = ['name', 'slug', 'content'];
    public $timestamps = false;

    public function getImgAttribute($value){
        return $value ?? '/no_image.jpg';
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
