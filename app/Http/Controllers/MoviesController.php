<?php

namespace App\Http\Controllers;

use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];
        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];
        $credits = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')->json()['results'];
        $title = 'Movie Browser';
        $viewModel = new MoviesViewModel(
            $popularMovies,
            $credits,
            $genres,
            $title
        );
        return view('movies.index', $viewModel);
    }

    public function show($id)
    {
        $detailsMovie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=credits,videos,images')->json();
        $title = $detailsMovie['title'];
        $viewModel = new MovieViewModel($detailsMovie, $title);
        // dump($detailsMovie);
        return view('movies.show', $viewModel);
    }
}
