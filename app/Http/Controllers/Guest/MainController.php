<?php

namespace App\Http\Controllers\Guest;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Movie;

class MainController extends Controller
{
    public function index()
    {
        //prendo tutti i file dalla tabella Movie del database
        $movies = Movie::all();
        //li passo alla mia homepage
        return view("homepage", compact("movies"));
    }
}
