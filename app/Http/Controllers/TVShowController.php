<?php

namespace App\Http\Controllers;

use App\ViewModels\TVShowDetailsViewModel;
use App\ViewModels\TVShowViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TVShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airingTodayTVShow = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/on_the_air')->json()['results'];
        $popularTVShow = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular')->json()['results'];
        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/tv/list')->json()['genres'];
        $title = 'TV Shows';
        $viewModel = new TVShowViewModel(
            $airingTodayTVShow,
            $popularTVShow,
            $genres,
            $title
        );
        return view('tvshow.index', $viewModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detailsTVShow = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/' . $id . '?append_to_response=credits,videos,images')->json();
        $title = $detailsTVShow['name'];
        // dump($detailsTVShow);
        $viewModel = new TVShowDetailsViewModel($detailsTVShow, $title);
        return view('tvshow.show', $viewModel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
