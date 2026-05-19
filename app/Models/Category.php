<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $with = ['post'];
    public function posts()
    {
        
        // return $this->hasMany(Post::class);
        // return $this->belongsToMany(Category::class);
        return $this->hasMany(Post::class);
    }
}
W