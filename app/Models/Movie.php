<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(Image::class, 'movie_id', 'id');
    }

    public function casts()
    {
        return $this->hasMany(MovieCast::class, 'movie_id', 'id');
    }

    public function category()
    {
        return $this->hasMany(Category::class, 'id', 'category_id');
    }
}
