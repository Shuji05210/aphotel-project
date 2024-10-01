<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservedetail;

class ReservedetailController extends Controller
{
    public function index()
    {
        $reservedetails = Reservedetail::all();

        return view('reservedetail.index', compact('reservedetails'));
    }

    public function create()
    {
        return view('reservedetail.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'rest_date' => 'required|max:8',
            'room_price' => 'required|max:10',
        ]);

        $validated['reserve_id'] ;
        $validated['room_id'];

        $reservedetail = Reservedetail::create($validated);

        return back()->with('message', '保存しました');
    }

}
