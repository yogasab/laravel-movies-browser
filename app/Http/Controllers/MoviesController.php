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
        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')->json()['results'];
        $genres = collect($genresMovies)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
        dump($nowPlayingMovies);
        // dump($popularMovies);
        $data = [
            'popularMovies' => $popularMovies,
            'genres' => $genres,
            'nowPlayingMovies' => $nowPlayingMovies
        ];
        return view('index', $data);
    }

    public function show($id)
    {
        $detailsMovie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=credits,videos,images')->json();
        $data = [
            'detailsMovie' => $detailsMovie
        ];
        dump($detailsMovie);
        return view('movies.show', $data);
    }
}
