<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnbarController;
use App\Http\Controllers\KalaController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('auth.login ');
})->name('login');

Route::post('/login',[AuthController::class, 'login'])->name('auth.login');


Route::get('/test', function () {
    return view('test.main');
});

Route::middleware(['auth'])->group(function(){
    Route::get('dashboard', 'DashboardController@show')->name('dashboard'); 
    Route::get('Anbar/Create', [AnbarController::class,'add'])->name('anbar.add'); 
    Route::post('Anbar/Create', [AnbarController::class,'store'])->name('anbar.store'); 
    Route::get('Anbar', [AnbarController::class,'index'])->name('anbar.index');

    Route::get('Kala/Create', [KalaController::class,'add'])->name('kala.add'); 
    Route::post('Kala/Create', [KalaController::class,'store'])->name('kala.store'); 
    
});
