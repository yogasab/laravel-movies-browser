<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $keyword = '';
    public function render()
    {
        $keywordResults = [];
        if (strlen($this->keyword) > 3) {
            $keywordResults = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie?query=' . $this->keyword)
                ->json()['results'];
        }
        $data = [
            'keywordResults' => collect($keywordResults)->take(8)
        ];
        // dump($keywordResults);
        return view('livewire.search-dropdown', $data);
    }
}
