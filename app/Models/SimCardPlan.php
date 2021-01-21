<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimCardPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nickname',
        'hourly_capacity',
        'daily_capacity',
        'monthly_capacity'
    ];

    public function simcards()
    {
        return $this->hasMany(SimCard::class);
    }
}
