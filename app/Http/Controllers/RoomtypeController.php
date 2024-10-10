<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomtype;

class RoomtypeController extends Controller
{
    public function index()
    {
        $roomtypes = Roomtype::all();
        return view('roomtype.index', compact('roomtypes'));
    }

    //登録フォームページを表示
    public function create()
    {
        return view('roomtype.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_name'=> 'required|max:20',
            'max_rest_people'=> ['required', 'numeric', 'max:20'],
        ]);

        $roomtype = Roomtype::create($validated);

        //メッセージ表示 indexへリダイレクト
        session()->flash('success', 'データが正常に保存されました！');

        return redirect('/roomtype');
    }
}
