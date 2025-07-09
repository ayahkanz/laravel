<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    protected $fillable = [
        'matakuliah_id',
        'room_id',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'nomor_urut',
        'jumlah_peserta_dialokasikan',
        'status',
    ];
}
