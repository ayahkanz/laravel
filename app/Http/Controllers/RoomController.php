<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RoomImport;

class RoomController extends Controller
{
    public function importExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new RoomImport, $request->file('file'));

        return back()->with('success', 'Data ruangan berhasil diimport!');
    }
}
