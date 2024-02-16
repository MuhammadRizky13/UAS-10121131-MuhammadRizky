<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PegawaiController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(PegawaiController::class)->prefix('pegawais')->group(function () {
        Route::get('', 'index')->name('pegawais');
        Route::get('create', 'create')->name('pegawais.create');
        Route::post('store', 'store')->name('pegawais.store');
        Route::get('show/{id}', 'show')->name('pegawais.show');
        Route::get('edit/{id}', 'edit')->name('pegawais.edit');
        Route::put('edit/{id}', 'update')->name('pegawais.update');
        Route::delete('destroy/{id}', 'destroy')->name('pegawais.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});