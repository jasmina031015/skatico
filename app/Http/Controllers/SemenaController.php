<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemenaController extends Controller
{
    public function index()
    {
        return view('semena');
    }
}
