<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function index(Request $request)
    {
        return view('audit');
    }
}
