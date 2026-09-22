<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/chi-siamo', function () {
    $users = [
        ['name'=> 'Mario', 'surname'=>'Rossi', 'role'=>'Senior Manager'],
        ['name'=> 'Serena', 'surname'=>'Verdi', 'role'=>'HR'],
        ['name'=> 'Walter', 'surname'=>'Bianchi', 'role'=>'Developer'],
    ];

    return view('about-us', ['users' => $users]);
})->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', function($name){
    $users = [
        ['name'=> 'Mario', 'surname'=>'Rossi', 'role'=>'Senior Manager'],
        ['name'=> 'Serena', 'surname'=>'Verdi', 'role'=>'HR'],
        ['name'=> 'Walter', 'surname'=>'Bianchi', 'role'=>'Developer'],
    ];

    foreach($users as $user){
        if($name == $user['name']){
            return view('about-us-detail', ['user' => $user]);
        }
    }

    abort(404);
})->name('aboutUsDetail');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/movies', function () {
    $movies = [
        ['id' => 1, 'title' => 'Incontri ravvicinati del terzo tipo', 'director' => 'S. Spielberg', 'img' => '/media/poster/spielberg.jpg', 'genres' => 'sci-fi'],
        ['id' => 2, 'title' => '1917', 'director' => 'Mendes', 'img' => '/media/poster/mendes2.jpg', 'genres' => 'guerra'],
        ['id' => 3, 'title' => 'Quei bravi ragazzi', 'director' => 'M. Scorsese', 'img' => '/media/poster/scorsese.webp', 'genres' => 'noir'],
        ['id' => 5, 'title' => 'Lost in Translation', 'director' => 'S. Coppola', 'img' => '/media/poster/coppola.jpg', 'genres' => 'drammatico'],
    ];

    return view('movie.movies', ['movies'=>$movies]);
})->name('movie.list');

Route::get('/movie/detail/{id}', function($id){
    $movies = [
        ['id' => 1, 'title' => 'Incontri ravvicinati del terzo tipo', 'director' => 'S. Spielberg', 'img' => '/media/poster/spielberg.jpg', 'genres' => 'sci-fi'],
        ['id' => 2, 'title' => '1917', 'director' => 'Mendes', 'img' => '/media/poster/mendes2.jpg', 'genres' => 'guerra'],
        ['id' => 3, 'title' => 'Quei bravi ragazzi', 'director' => 'M. Scorsese', 'img' => '/media/poster/scorsese.webp', 'genres' => 'noir'],
        ['id' => 5, 'title' => 'Lost in Translation', 'director' => 'S. Coppola', 'img' => '/media/poster/coppola.jpg', 'genres' => 'drammatico'],
    ];

    foreach($movies as $movie){
        if($id == $movie['id']){
            return view('movie.movie-detail', ['movie'=>$movie]);
        }
    }

})->name('movie.detail');