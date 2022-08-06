<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceType extends Model
{
    use HasFactory;
    public function place()
    {
        return $this->hasMany(PropertyTypePlace::class,'place_type_id','id');
    }
}
