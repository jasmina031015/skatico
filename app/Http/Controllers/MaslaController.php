<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaslaController extends Controller
{
    public function index()
    {
        return view('/masla');
    }
}
