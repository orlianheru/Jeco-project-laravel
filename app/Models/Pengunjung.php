<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengunjung extends Model
{
    protected $fillable = [
        'name_hotel',
        'gender',
        'tipe_kamar',
        'harga',
        'pengunjung_id'
    ];
    
    public function hotel (): BelongsTo
    {
        return $this->belongsTo(hotel::class);
    }
}
