<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PManegement;

class PageController extends Controller
{
    public function index() {
        return view('page.index');
    }
}
