<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', [DataController::class, 'index'])->name('index');
Route::post('/xml/import', [DataController::class, 'import'])->name('xml.import');
