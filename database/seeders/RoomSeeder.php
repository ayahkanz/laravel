<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            ['kode_ruang' => '01.05A', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '01.05B', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '02.05', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '02.10', 'kapasitas_peserta' => 64, 'fasilitas' => null],
            ['kode_ruang' => '02.11', 'kapasitas_peserta' => 25, 'fasilitas' => null],
            ['kode_ruang' => '02.12', 'kapasitas_peserta' => 64, 'fasilitas' => null],
            ['kode_ruang' => '02.13', 'kapasitas_peserta' => 25, 'fasilitas' => null],
            ['kode_ruang' => '02.14', 'kapasitas_peserta' => 64, 'fasilitas' => null],
            ['kode_ruang' => '03.04A', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '03.04B', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '03.05A', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '03.05B', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '03.06A', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '03.06B', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '03.09', 'kapasitas_peserta' => 64, 'fasilitas' => null],
            ['kode_ruang' => '03.10', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '03.11', 'kapasitas_peserta' => 64, 'fasilitas' => null],
            ['kode_ruang' => '03.12', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '03.13', 'kapasitas_peserta' => 64, 'fasilitas' => null],
            ['kode_ruang' => '04.03', 'kapasitas_peserta' => 28, 'fasilitas' => null],
            ['kode_ruang' => '04.04', 'kapasitas_peserta' => 28, 'fasilitas' => null],
            ['kode_ruang' => '04.05A', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '04.05B', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '04.08', 'kapasitas_peserta' => 64, 'fasilitas' => null],
            ['kode_ruang' => '04.09', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '04.10', 'kapasitas_peserta' => 28, 'fasilitas' => null],
            ['kode_ruang' => '04.11', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '04.12', 'kapasitas_peserta' => 64, 'fasilitas' => null],
            ['kode_ruang' => '04.15A', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '04.15B', 'kapasitas_peserta' => 30, 'fasilitas' => null],
            ['kode_ruang' => '04.16', 'kapasitas_peserta' => 28, 'fasilitas' => null],
            ['kode_ruang' => '04.17', 'kapasitas_peserta' => 28, 'fasilitas' => null],
            ['kode_ruang' => 'LS1', 'kapasitas_peserta' => 15, 'fasilitas' => null],
            ['kode_ruang' => 'Take Home', 'kapasitas_peserta' => 100, 'fasilitas' => null],
            ['kode_ruang' => 'GC', 'kapasitas_peserta' => 100, 'fasilitas' => null],
            ['kode_ruang' => 'Google Classroom', 'kapasitas_peserta' => 100, 'fasilitas' => null],
            ['kode_ruang' => 'Laboratorium CAD', 'kapasitas_peserta' => 25, 'fasilitas' => null],
            ['kode_ruang' => 'Lab IF 4.1', 'kapasitas_peserta' => 36, 'fasilitas' => null],
            ['kode_ruang' => 'Lab IF 4.2', 'kapasitas_peserta' => 42, 'fasilitas' => null],
            ['kode_ruang' => 'Lab IF 3.3', 'kapasitas_peserta' => 42, 'fasilitas' => null],
            ['kode_ruang' => 'Lab IF 3.2', 'kapasitas_peserta' => 42, 'fasilitas' => null],
            ['kode_ruang' => 'Lab IF 3.1', 'kapasitas_peserta' => 40, 'fasilitas' => null],
            ['kode_ruang' => 'Lab CAD A', 'kapasitas_peserta' => 25, 'fasilitas' => null],
            ['kode_ruang' => 'Lab CAD B', 'kapasitas_peserta' => 25, 'fasilitas' => null],
        ];

        foreach ($rooms as $room) {
            \App\Models\Room::create($room);
        }
    }
}
