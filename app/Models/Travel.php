<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'description',
        'imagen',
        'origin_id',
        'destination_id',
        'travel_date',
    ];
}
