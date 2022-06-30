<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $dates = ['created_at', 'updated_at', 'date'];
    use HasFactory;
}
