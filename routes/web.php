<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\GuestController;

use App\Http\Controllers\ReserveController;

use App\Http\Controllers\ReservedetailController;

use App\Http\Controllers\RoomController;

use App\Http\Controllers\RoomtypeController;

use App\Http\Controllers\PageController;



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



//予約詳細
Route::get('reservedetail/create', [ReservedetailController::class, 'create']);
Route::post('reservedetail', [ReservedetailController::class, 'store'])->name('reservedetail.store');

//予約詳細一覧ページ
Route::get('reservedetail', [ReservedetailController::class, 'index']);


//部屋 room
Route::get('room/create', [RoomController::class, 'create']);
Route::post('room', [RoomController::class, 'store'])->name('room.store');

Route::get('room', [RoomController::class, 'index']);



//roomtype
Route::get('roomtype/create', [RoomtypeController::class, 'create']);
Route::post('roomtype', [RoomtypeController::class, 'store'])->name('roomtype.store');

Route::get('roomtype', [RoomtypeController::class, 'index']);


//page 一覧
Route::get('service', [PageController::class, 'index']);




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
