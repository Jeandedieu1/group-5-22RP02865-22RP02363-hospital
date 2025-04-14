<?php


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\DocterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/function', function () {
    return view('welcome');
});

Route::get('/dashboard',[DocterController::class,'dashboard'])->name('docter.dashboard');
Route::get('/docter_form',[DocterController::class,'index'])->name('docter.index');
Route::post('/store',[DocterController::class,'store'])->name('docter.store');
Route::get('/showall',[DocterController::class,'showall'])->name('docter.showall');
Route::get('/edit/{docter}/modify',[DocterController::class,'edit'])->name('docter.edit');
Route::put('/update/{docter}/change',[DocterController::class,'update'])->name('docter.update');
Route::delete('/delete/{docter}/destroy',[DocterController::class,'destroy'])->name('docter.destroy');

Route::get('/', [AuthenticatedSessionController::class, 'create']) ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);