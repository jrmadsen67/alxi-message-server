<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceGroup extends Model
{
    use HasFactory;

    protected $fillable = ['nickname'];

    public function allocations()
    {
        return $this->hasMany(Allocation::class);
    }
}
