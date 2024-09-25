<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;
use App\Models\Guest;

class ReserveController extends Controller
{
    public function index()
    {
        $reserves = Reserve::all();
        return view('reserve.index', compact('reserves'));
    }

    public function create()
    {
        return view('reserve.create');
    }

    public function store(Request $request){
        $reserve = Reserve::create([
            'people' => $request->people,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
        ]);

        $validated = $request->validate([
            'people' => 'required|max:20',
            'checkin_date' => 'required|max:10',
            'checkout_date' => 'required|max:10',
        ]);

        $post = Guest::create($validated);

        $validated['user_id'] = auth()->id();

        return back();
    }
}
