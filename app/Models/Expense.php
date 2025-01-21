<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'travel_id',
        'establishments',
        'gasoline',
        'seating',
        'total',
    ];

    public function travel():BelongsTo{
        return $this->belongsTo(Travel::class, 'travel_id');
    }

}
