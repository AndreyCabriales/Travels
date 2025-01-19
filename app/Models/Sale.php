<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'travel_id',
        'client_id',
        'sale_date',
        'unit_price',
    ];

    public function travel():BelongsTo{
        return $this->belongsTo(Travel::class, 'travel_id');
    }

    public function client():BelongsTo{
        return $this->belongsTo(Client::class, 'client_id');
    }
}
