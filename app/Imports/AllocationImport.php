<?php

namespace App\Imports;

use App\Models\Allocation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AllocationImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        static $nomorUrut = 1;
        $allocation = new Allocation([
            'matakuliah_id' => $row['matakuliah_id'],
            'room_id' => $row['room_id'],
            'tanggal' => $row['tanggal'],
            'waktu_mulai' => $row['waktu_mulai'],
            'waktu_selesai' => $row['waktu_selesai'],
            'nomor_urut' => $nomorUrut++,
            'jumlah_peserta_dialokasikan' => $row['jumlah_peserta_dialokasikan'],
            'status' => $row['status'] ?? 'direncanakan',
        ]);
        return $allocation;
    }
}
