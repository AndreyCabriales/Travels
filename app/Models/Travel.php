<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Travel extends Model
{
    use HasFactory;
    
    protected $table = 'travels';
    
    protected $fillable = [
        'description',
        'imagen',
        'origin_id',
        'destination_id',
        'travel_date',
    ];

    public function origin():BelongsTo{
        return $this->belongsTo(Origin::class, 'origin_id');
    }

    public function destination():BelongsTo{
        return $this->belongsTo(Destination::class, 'destination_id');
    }
}
