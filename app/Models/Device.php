<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'nickname',
        'imei',
        'os',
        'virtual_location_id',
        'physical_location_id',
        'physical_location_port',
        'device_plan_id'
    ];
}
