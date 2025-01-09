<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenovController extends Controller
{
    public function index(Request $request)
    {
        return view('renov');
    }
}
