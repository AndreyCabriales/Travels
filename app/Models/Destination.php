<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'destination_hour',
        'destination_city',
        'destination_state',
        'destination_country',
    ];
}
