<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MovieViewModel extends ViewModel
{
    public $movie;
    public $title;
    public function __construct($movie, $title)
    {
        $this->movie = $movie;
        $this->title = $title;
    }
    public function movie()
    {
        return collect($this->movie)->merge([
            'poster_path' => $this->movie ? 'https://image.tmdb.org/t/p/w500/' . $this->movie['poster_path'] : 'https://via.placeholder.com/500x750',
            'vote_average' => $this->movie['vote_average'] * 10 . '%',
            'release_date' => Carbon::parse($this->movie['release_date'])->format('m d, Y'),
            'genres' => collect($this->movie['genres'])->pluck('name')->implode(', '),
            'cast' => collect($this->movie['credits']['cast'])->take(3),
            'casts' => collect($this->movie['credits']['cast'])->take(5)->map(function ($cast) {
                return collect($cast)->merge([
                    'profile_path' => $cast['profile_path'] ? 'https://image.tmdb.org/t/p/w300/' . $cast['profile_path'] : 'https://via.placeholder.com/300x450'
                ]);
            }),
            'images' => collect($this->movie['images']['backdrops'])->take(10),
        ]);
    }
    public function title()
    {
        return $this->title;
    }
}
