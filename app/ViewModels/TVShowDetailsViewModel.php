<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TVShowDetailsViewModel extends ViewModel
{
    public $detailsTVShow, $title;
    public function __construct($detailsTVShow, $title)
    {
        $this->detailsTVShow = $detailsTVShow;
        $this->title = $title;
    }

    public function tvShow()
    {
        return collect($this->detailsTVShow)->merge([
            'poster_path' => $this->detailsTVShow['poster_path'] ? 'https://image.tmdb.org/t/p/w500/' . $this->detailsTVShow['poster_path'] : 'https://via.placeholder.com/500x750',
            'vote_average' => $this->detailsTVShow['vote_average'] * 10,
            'first_air_date' => Carbon::parse($this->detailsTVShow['first_air_date'])->format('M d, Y'),
            'genres' => collect($this->detailsTVShow['genres'])->pluck('name')->flatten()->implode(', '),
            'cast' => collect($this->detailsTVShow['credits']['cast'])->take(5)->map(function ($cast) {
                return collect($cast)->merge([
                    'profile_path' => $cast['profile_path'] ? 'https://image.tmdb.org/t/p/w500/' . $cast['profile_path'] : 'https://via.placeholder.com/500x750',
                ]);
            }),
            'images' => collect($this->detailsTVShow['images']['backdrops'])->take(9)
        ])->only([
            'poster_path', 'id', 'genres', 'name', 'vote_average', 'overview', 'first_air_date', 'credits',
            'videos', 'images', 'crew', 'cast', 'images', 'created_by'
        ]);;
        // return collect($this->detailsTVShow)->dump();
    }

    public function title()
    {
        return $this->title;
    }
}
