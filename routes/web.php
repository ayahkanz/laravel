<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AllocationController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/rooms/import', [RoomController::class, 'importExcel'])->name('rooms.import');
Route::post('/allocations/import', [AllocationController::class, 'importExcel'])->name('allocations.import');
Route::get('/allocations/import', function () {
    return view('allocations_import');
})->name('allocations.import.form');
