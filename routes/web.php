<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\GuestController;

use App\Http\Controllers\ReserveController;

use App\Http\Controllers\ReservedetailController;

use App\Http\Controllers\RoomController;

use App\Http\Controllers\RoomtypeController;



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



//Guest ユーザー

//登録フォームのルート
Route::get('guest/create', [GuestController::class, 'create']);
Route::post('guest', [GuestController::class, 'store'])->name('guest.store');


//閲覧用 ユーザ一覧
Route::get('guest', [GuestController::class, 'index']);


//予約 Reserve
Route::get('reserve/create', [ReserveController::class, 'create']);
Route::post('reserve', [ReserveController::class, 'store'])->name('reserve.store');

//予約一覧ページ
Route::get('reserve', [ReserveController::class, 'index']);




Route::get('/room', function () {
    return view('room');
});






Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
