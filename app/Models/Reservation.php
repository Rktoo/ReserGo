<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'customer_name',
        'customer_email',
        'reservation_date',
    ];

    protected $casts = [
        'reservation_date' => 'datetime',  // Conversion automatique en Carbon
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
