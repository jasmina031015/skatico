<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonservController extends Controller
{
    public function index()
    {
        return view('konservatsiya');
    }
}
