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
        'device_group_id',
        'virtual_location_id',
        'physical_location_id',
        'physical_location_port'
    ];
}
