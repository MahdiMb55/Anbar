<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnbarController;
use App\Http\Controllers\DarkhastController;
use App\Http\Controllers\KalaController;
use App\Models\Kala;

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
    Route::get('Anbar/del/{id}', [AnbarController::class,'delete'])->name('anbar.delete');
    Route::get('Anbar/{id}', [AnbarController::class,'edit'])->name('anbar.edit');
    Route::post('Anbar/{id}', [AnbarController::class,'update'])->name('anbar.update');

    Route::get('Kala/Create', [KalaController::class,'add'])->name('kala.add'); 
    Route::post('Kala/Create', [KalaController::class,'store'])->name('kala.store'); 
    Route::get('Kala', [KalaController::class,'index'])->name('kala.index');
    Route::get('Kala/del/{id}', [KalaController::class,'delete'])->name('kala.delete');
    Route::get('Kala/{id}', [KalaController::class,'edit'])->name('kala.edit');
    Route::post('Kala/{id}', [KalaController::class,'update'])->name('kala.update');


    Route::get('Darkhast/Create', [DarkhastController::class,'add'])->name('darkhast.add'); 

    
});
