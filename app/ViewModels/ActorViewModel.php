<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class ActorViewModel extends ViewModel
{
    public $actor, $title, $social, $credits;

    public function __construct($actor, $title, $social, $credits)
    {
        $this->actor = $actor;
        $this->title = $title;
        $this->social = $social;
        $this->credits = $credits;
    }

    public function actor()
    {
        return collect($this->actor)->merge([
            'birthday' => Carbon::parse($this->actor['birthday'])->format('M d, Y'),
            'age' => Carbon::parse($this->actor['birthday'])->age,
            'profile_path' => $this->actor['profile_path'] ? 'https://image.tmdb.org/t/p/w300/' . $this->actor['profile_path'] : 'https://via.placeholder.com/300x450',
        ])->only(['birthday', 'age', 'profile_path', 'name', 'id', 'homepage', 'place_of_birth', 'biography']);
    }

    public function title()
    {
        return $this->title;
    }

    public function social()
    {
        return collect($this->social)->merge([
            'facebook' => $this->social['facebook_id'] ? 'https://facebook.com/' . $this->social['facebook_id'] : null,
            'twitter' => $this->social['twitter_id'] ? 'https://twitter.com/' . $this->social['twitter_id'] : null,
            'instagram' => $this->social['instagram_id'] ? 'https://instagram.com/' . $this->social['instagram_id'] : null
        ])->only(['facebook', 'instagram', 'twitter']);
    }

    public function knownForMovies()
    {
        $castMovies = collect($this->credits)->get('cast');
        return collect($castMovies)->sortByDesc('popularity')->take(5)->map(function ($movie) {
            if (isset($movie['title'])) {
                $title = $movie['title'];
            } else if (isset($movie['name'])) {
                $title = $movie['name'];
            } else {
                $title = 'Untitled';
            }
            return collect($movie)->merge([
                'poster_path' => $movie['poster_path'] ? 'https://image.tmdb.org/t/p/w185' . $movie['poster_path'] : 'https://via.placeholder.com/185x278',
                'title' => $title,
                // 'link_to_page'=> $movie['media_type'] === 'movie' ? route()
            ])->only(['poster_path', 'title', 'media_type', 'id']);
        });
    }

    public function credits()
    {
        $castCredits = collect($this->credits)->get('cast');
        return collect($castCredits)->map(function ($movie) {
            if (isset($movie['release_date'])) {
                $releaseDate = $movie['release_date'];
            } else if (isset($movie['first_air_date'])) {
                $releaseDate = $movie['first_air_date'];
            } else {
                $releaseDate = '';
            }

            if (isset($movie['title'])) {
                $title = $movie['title'];
            } else if (isset($movie['name'])) {
                $title = $movie['name'];
            } else {
                $title = 'Untitled';
            }
            return collect($movie)->merge([
                'release_date' => $releaseDate,
                'title' => $title,
                'release_year' => isset($releaseDate) ? Carbon::parse($releaseDate)->format('Y') : 'To be announce',
                'character' => $movie['character'] ? $movie['character'] : '',
            ])->only(['release_date', 'release_year', 'title', 'character']);
        })->sortByDesc('release_date');
    }
}
