<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Thumbnail;

class Post extends Model
{
    protected $fillable = ['title', 'likes', 'category_id'];
    public function thumbnail()
    {
        return $this->hasOne(Thumbnail::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
