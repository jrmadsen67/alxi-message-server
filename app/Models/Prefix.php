<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefix extends Model
{
    use HasFactory;

    protected $fillable = [
        'prefix', 'network_id'
    ];

    public function network()
    {
        return  $this->belongsTo(Network::class);
    }
}
