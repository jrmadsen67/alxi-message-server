<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevicePlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nickname',
        'hourly_capacity',
        'daily_capacity',
        'monthly_capacity'
    ];
}
