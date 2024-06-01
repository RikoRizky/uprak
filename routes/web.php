<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['auth'])->group(function () {
    Route::get("vehicle", [AppController::class, "vehicle"]);
    Route::get('admin', [AppController::class, 'admin']);
    Route::get("tampil",[Appcontroller::class,"tampil"]);

    Route::get('createadmin', [AppController::class, 'createadmin'])->name('admins.create');
    Route::post('/admins', [AppController::class, 'storeAdmin'])->name('admins.store');
    Route::get('/admin', [AppController::class, 'admin'])->name('admin');
    Route::put('/admins/{id}', [AppController::class, 'updateAdmin'])->name('admins.update');
    Route::get('/admins/{id}/edit', [AppController::class, 'editAdmin'])->name('admins.edit');
    Route::delete('/admins/{id}', [AppController::class, 'destroyAdmin'])->name('admins.destroy');

    Route::get('/createvehicle', [AppController::class, 'create'])->name('createvehicle');
    Route::post('/vehicles', [AppController::class, 'store'])->name('vehicles.store');
    Route::get('/vehicles', [AppController::class, 'vehicle'])->name('vehicle');
    Route::get('/vehicles/{vehicle}/edit', [AppController::class, 'edit'])->name('vehicles.edit');
    Route::put('/vehicles/{vehicle}', [AppController::class, 'update'])->name('vehicles.update');
    Route::delete('/vehicles/{vehicle}', [AppController::class, 'destroy'])->name('vehicles.destroy');

    Route::get('/report', [AppController::class, 'report'])->name('report');
});

Route::get("login",[AppController::class,"login"])->name("login");
Route::get("logout",[AuthController::class,"proses_logout"]);
Route::post("proses-login",[AuthController::class,"proses_login"]);

Route::get("/",[Appcontroller::class,"home"]);
Route::get("tampiladmin",[Appcontroller::class,"tampiladmin"]);
Route::get("tampilvehicle",[Appcontroller::class,"tampilvehicle"]);