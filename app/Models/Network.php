<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'country_id'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function mccMncs()
    {
        return $this->hasMany(MccMnc::class);
    }

    public function prefixes()
    {
        return $this->hasMany(Prefix::class);
    }

    public function simCards()
    {
        return $this->hasMany(MccMnc::class);
    }
}
