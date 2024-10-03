<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('room.index', compact('rooms'));
    }

    //登録フォームページを表示
    public function create()
    {
        return view('room.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'roomtype_id' => ['required','numeric','max:4'],
            'room_number' => ['required','digits:3','integer'],
        ]);

        $room = Room::create($validated);
    }
}