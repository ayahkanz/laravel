<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AllocationImport;

class AllocationController extends Controller
{
    public function importExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new AllocationImport, $request->file('file'));

        return back()->with('success', 'Data alokasi berhasil diimport!');
    }
}
