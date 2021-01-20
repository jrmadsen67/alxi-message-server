<?php

namespace App\Models;

use App\Http\Livewire\DevicePlans;
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

    public function devicePlan()
    {
        return $this->belongsTo(DevicePlan::class);
    }

    public function physicalLocation()
    {
        return $this->belongsTo(PhysicalLocation::class);
    }

    public function virtualLocation()
    {
        return $this->belongsTo(VirtualLocation::class);
    }
}
