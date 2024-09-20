<?php

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

Route::get('/guest', function () {
    return view('guest/guest');
});

Route::get('/reserve', function (){
    return view('reserve/reserve');
});

Route::get('/add', function(){
    return view('');
});


/* Route::get('', function () {
    return view('');
}); */


Route::get('/room',
function () {
    return view('room');
});





Route::get('/', function () {
    return view('welcome');
});
