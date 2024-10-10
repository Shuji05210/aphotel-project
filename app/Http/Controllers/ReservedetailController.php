<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservedetail;

use App\Models\Room;
use App\Models\Reserve;

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
            'reserve_id' => 'required|numeric', 
            'room_id' => 'required|numeric',
            'rest_date' => 'required|max:8',
            'room_price' => 'required|max:10',
        ]);

        $reservedetail = Reservedetail::create($validated);

        //reservedetail 一覧ページへリダイレクト
        session()->flash('success', 'データが正常に保存されました！');

        return redirect('/reservedetail');

    }

}
