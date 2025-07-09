<?php

namespace App\Imports;

use App\Models\Room;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RoomImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Room([
            'kode_ruang' => $row['kode_ruang'],
            'kapasitas_peserta' => $row['kapasitas_peserta'],
            'fasilitas' => $row['fasilitas'] ?? null,
        ]);
    }
}
