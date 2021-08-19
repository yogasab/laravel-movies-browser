<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];
        $genresMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];
        $genres = collect($genresMovies)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
        // dd($genres);
        dump($popularMovies);
        $data = [
            'popularMovies' => $popularMovies,
            'genres' => $genres
        ];
        return view('index', $data);
    }
}
