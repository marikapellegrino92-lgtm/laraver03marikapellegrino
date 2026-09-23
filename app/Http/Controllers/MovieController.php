<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public $movies = [
        ['id' => 1, 'title' => 'Incontri ravvicinati del terzo tipo', 'director' => 'S. Spielberg', 'img' => '/media/poster/spielberg.jpg', 'genres' => 'sci-fi'],
        ['id' => 2, 'title' => '1917', 'director' => 'Mendes', 'img' => '/media/poster/mendes2.jpg', 'genres' => 'guerra'],
        ['id' => 3, 'title' => 'Quei bravi ragazzi', 'director' => 'M. Scorsese', 'img' => '/media/poster/scorsese.webp', 'genres' => 'noir'],
        ['id' => 5, 'title' => 'Lost in Translation', 'director' => 'S. Coppola', 'img' => '/media/poster/coppola.jpg', 'genres' => 'drammatico'],
    ];

    public function movieList(){
        return view('movie.movies', ['movies' => $this->movies]);
    }

    public function movieDetail($id){
        foreach($this->movies as $movie){
            if($id == $movie['id']){
                return view('movie.movie-detail', ['movie' => $movie]);
            }
        }

        abort(404);
    }
}
