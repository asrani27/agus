<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $guarded = ['id'];
    public function jalur()
    {
        return $this->belongsTo(Jalur::class);
    }
}
