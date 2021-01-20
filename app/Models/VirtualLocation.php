<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
