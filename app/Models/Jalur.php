<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    protected $table = 'jalur';
    protected $guarded = ['id'];
    public function kapal()
    {
        return $this->belongsTo(Kapal::class);
    }
    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }
}
