<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;

Route::get('/', [PengaduanController::class, 'index']);

Route::post('/tambah', [PengaduanController::class, 'store']);

Route::delete('/hapus/{id}', [PengaduanController::class, 'destroy']);