<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'cc'];

    public function physicalLocations()
    {
        return $this->hasMany(PhysicalLocation::class);
    }

    public function virtualLocations()
    {
        return $this->hasMany(VirtualLocation::class);
    }

    public function networks()
    {
        return $this->hasMany(Network::class);
    }
}
