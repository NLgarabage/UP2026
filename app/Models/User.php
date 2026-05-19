<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    protected $fillable = ['name'];
    use HasFactory;
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function relation()
    {
        return $this->belongsTo(Relation::class);
    }

}
