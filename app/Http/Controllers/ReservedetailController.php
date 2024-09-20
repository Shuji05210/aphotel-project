<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservedetail;

class ReservedetailController extends Controller
{
    public function index()
    {
        $reservedetails = Reservedetail::all();

        return view('reservedetail.index', ['reservedetails' => $reservedetails]);
    }
}
