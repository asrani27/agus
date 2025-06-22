<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $guarded = ['id'];
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }
}
