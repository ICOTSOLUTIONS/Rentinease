<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function photos()
    {
        return $this->hasMany(PostingPhoto::class, 'posting_id', 'id');
    }

    public function floorPlans()
    {
        return $this->hasMany(PostingFloorPlan::class, 'posting_id', 'id');
    }

    public function threeSixties()
    {
        return $this->hasMany(PostingThreeSixty::class, 'posting_id', 'id');
    }

    public function videos()
    {
        return $this->hasMany(PostingVideo::class, 'posting_id', 'id');
    }

    public function purpose()
    {
        return $this->belongsTo(Purpose::class, 'purpose_id', 'id');
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyTypePlace::class, 'property_type_place_id', 'id');
    }

    public function listning_type()
    {
        return $this->belongsTo(CoinDeduction::class, 'listing_tyoe', 'id');
    }
}
