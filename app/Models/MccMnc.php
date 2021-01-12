<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MccMnc extends Model
{
    use HasFactory;

    protected $fillable = [
        'mcc',
        'mnc',
        'network_id',
    ];
}
