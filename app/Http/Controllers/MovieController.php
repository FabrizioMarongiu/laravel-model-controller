<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    /*
    ARCHIVIO FILM
    */
    

    public function index(){
        
    //OTTENERE FILMS DAL DATABASE
        $movies = Movie::all();
        dump($movies);

    return view('movie', compact('movies'));
}
}

