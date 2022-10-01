<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyTypePlace extends Model
{
    use HasFactory;
    public function placeType()
    {
        return $this->belongsTo(PlaceType::class,'place_type_id','id');
    }
}
