<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PositionController;


Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return redirect()->route('employes.index');
    });

    Route::resources([
        'employes' => EmployeController::class,
        'positions' => PositionController::class,

    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
