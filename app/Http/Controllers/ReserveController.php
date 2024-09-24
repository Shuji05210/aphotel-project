<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;

class ReserveController extends Controller
{
    public function index()
    {
        $reserves = Reserve::all();
        return view('reserve.index', compact('reserves'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'reserve_id' => 'required|max:20',
            'people' => 'required|max:20',
        ]);

        $post = Post::create([
            '' => $request->,
            '' => $request->,
        ]);

        $post = Post::create($validated);

        $validated['user_id'] = auth()->id();

        return back();
    }
}
