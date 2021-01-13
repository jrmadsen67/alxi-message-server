<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nickname', 'host', 'country_id'
    ];

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
