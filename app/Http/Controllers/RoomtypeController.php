<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomtype;

class RoomtypeController extends Controller
{
    public function index()
    {
        $roomtypes = Roomtype::all();

        return view('roomtype.index', ['roomtypes' => $roomtypes]);
    }
}
