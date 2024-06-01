<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id', 'category', 'brand', 'type', 'number', 'cost_per_hour', 'time_start', 'time_end', 'total_price',
    ];
    public $timestamps = false;
}
