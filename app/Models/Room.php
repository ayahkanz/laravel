<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'kode_ruang',
        'kapasitas_peserta',
        'fasilitas',
    ];
}
