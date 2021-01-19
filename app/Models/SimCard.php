<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'iccid', 'msisdn', 'network_id', 'device_plan_id', 'sim_card_plan_id'
    ];

    public function devicePlan()
    {
        return $this->hasOne(DevicePlan::class);
    }
}
