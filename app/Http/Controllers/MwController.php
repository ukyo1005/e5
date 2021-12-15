<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MwController extends Controller
{
    public function index()
    {
        return view('mw');
    }
}
