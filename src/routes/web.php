<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\VolunteerRamaThibodiController;
use App\Http\Controllers\RegisterFormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// start route form
Route::prefix('form')->group(function () {
    // รวมฟอร์ม
    Route::get('/covid19', [App\Http\Controllers\RegisterFormController::class, 'index'])->name('form.index');

    // หน้าฟอร์ม1
    Route::get('/covid19/ramathibodi', [App\Http\Controllers\RegisterFormController::class, 'formRamathibodi'])->name('form.ramathibodi');
    Route::post('/covid19/ramathibodi', [App\Http\Controllers\RegisterFormController::class, 'insertFormRamathibodi'])->name('form.ramathibodi.insert');


});



// end route form

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes([
    "register" => false,
    "reset" => false,
    "verify" => false,
]);

Route::prefix('covid')->group(function () {
    Route::resource('volunteer', VolunteerController::class);
    Route::resource('ramathibodi', VolunteerRamaThibodiController::class);
});

