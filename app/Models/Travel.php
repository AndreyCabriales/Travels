<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Travel extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand',
        'origin_id',
        'destination_id',
        'date',
        'ticket_price'
    ];
}
