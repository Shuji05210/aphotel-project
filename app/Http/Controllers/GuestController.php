<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{

    public function index()
    {
        $guests = Guest::all();
        return view('guest.index', compact('guests'));
    }

    //登録フォームページを表示
    public function create(){
        return view('guest.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:20',
            'address' => 'required|max:40',
            'tel' => 'required|max:12',
        ]);

        $guest = Guest::create($validated);
        return back();
    }

}