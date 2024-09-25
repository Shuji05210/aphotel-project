<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\GuestController;

use App\Http\Controllers\ReserveController;

use App\Http\Controllers\ReservedetailController;

use App\Http\Controllers\RoomController;

use App\Http\Controllers\RoomtypeController;
use App\Models\Reserve;

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
Route::get('/guest', function () {
    return view('guest/index');
});

//登録フォームのルート
Route::get('guest/create', [GuestController::class, 'create']);
Route::post('guest',[GuestController::class, 'store'])->name('guest.store');

//閲覧用 ユーザ一覧
Route::get('guest', [GuestController::class, 'index']);


//予約 Reserve
Route::get('reserve/create', [ReserveController::class, 'create']);
Route::post('reserve', [ReserveController::class, 'store'])->name('reserve.store');

//一覧ページ
Route::get('reserve', [ReserveController::class, 'index']);




/* Route::get('', function () {
    return view('');
}); */


Route::get('/room',function () {
    return view('room');
});





Route::get('/', function () {
    return view('welcome');
});
