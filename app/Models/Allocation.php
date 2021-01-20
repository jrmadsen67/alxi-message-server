<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    use HasFactory;

    protected $fillable = ['device_id', 'sim_card_id', 'device_group_id'];

    public function device()
    {
        return $this->hasOne(Device::class);
    }

    public function simCard()
    {
        return $this->hasOne(SimCard::class);
    }

    public function deviceGroup()
    {
        return $this->hasOne(DeviceGroup::class);
    }
}
