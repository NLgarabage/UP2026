<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function relations(): HasMany
    {
    return $this->hasMany(Relation::class);
    }

    public function users(): HasMany
    {
    return $this->hasMany(User::class);
    }
}
