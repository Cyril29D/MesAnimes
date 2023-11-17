<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index()
    {
        return view('Anime');
    }
    public function onepiece()
    {
        return view('onepiece');
    }
}
