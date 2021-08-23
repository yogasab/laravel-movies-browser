<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TVShowViewModel extends ViewModel
{
    public $airingTodayTVShow,
        $popularTVShow,
        $genres,
        $title;

    public function __construct($airingTodayTVShow, $popularTVShow, $genres, $title)
    {
        $this->airingTodayTVShow = $airingTodayTVShow;
        $this->popularTVShow = $popularTVShow;
        $this->genres = $genres;
        $this->title = $title;
    }

    public function airingTodayTVShow()
    {
        return $this->formatTV($this->airingTodayTVShow);
    }

    public function popularTVShow()
    {
        return $this->formatTV($this->popularTVShow);
    }

    public function formatTV($tv)
    {
        return collect($tv)->map(function ($tvshow) {
            $genresFormatted = collect($tvshow['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($tvshow)->merge([
                'first_air_date' => Carbon::parse($tvshow['first_air_date'])->format('M d, Y'),
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $tvshow['poster_path'],
                'vote_average' => $tvshow['vote_average'] * 10 . '%',
                'genres' => $genresFormatted,
            ]);
        });
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }
}
