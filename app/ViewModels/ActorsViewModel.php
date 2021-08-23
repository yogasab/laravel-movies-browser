<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ActorsViewModel extends ViewModel
{
    public $popularActors;
    public $title;
    public $page;
    public function __construct($popularActors, $title, $page)
    {
        $this->popularActors = $popularActors;
        $this->title = $title;
        $this->page = $page;
    }

    public function popularActors()
    {
        return collect($this->popularActors)->map(function ($actor) {
            return collect($actor)->merge([
                'profile_path' => $actor['profile_path'] ? 'https://image.tmdb.org/t/p/original' . $actor['profile_path'] : 'https://ui-avatars.com/api/?size=235&name=' . $actor['name'],
                'known_for' => collect($actor['known_for'])->where('media_type', 'movie')->pluck('title')->union(collect($actor['known_for'])->where('media_type', 'tv')->pluck('name'))->implode(', ')
            ]);
        });
    }
    public function title()
    {
        return $this->title;
    }
    public function previous()
    {
        return $this->page > 1 ? $this->page - 1 : null;
    }
    public function next()
    {
        return $this->page < 500 ? $this->page + 1 : null;
    }
}
