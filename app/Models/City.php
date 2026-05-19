<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    
    protected $fillable = ['name', 'population', 'country_id'];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
