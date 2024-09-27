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
        $validated = $request->validate([
            'people' => 'required|max:20',
            'checkin_date' => 'required|max:10',
            'checkout_date' => 'required|max:10',
        ]);

        $validated['user_id'] = auth()->id();

        $reserve = Reserve::create($validated);

        return back()->with('message', '保存しました');
    }
}
