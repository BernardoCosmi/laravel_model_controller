<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Recupera tutti i film dal database
        return view('pages.home', compact('movies')); // Passa i dati dei film alla vista
    }
}
