@extends('layouts.main')

@section('content')
  <div class="movie-info border-b border-gray-800">
    {{-- Movie Details --}}
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
      <img src="https://image.tmdb.org/t/p/w500/{{ $detailsMovie['poster_path'] }}" alt="{{ $detailsMovie['title'] }}" class="w-64 shadow rounded md:w-80">
      <div class="md:ml-24">
        {{-- Details Title --}}
          <h2 class="text-4xl font-semibold mb-2">{{$detailsMovie['title']}}</h2>
          <div class="flex items-center text-gray-400 mt-1">
            <span>
              <svg class="fill-current text-yellow-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
            </span>
            <span class="ml-2">{{ $detailsMovie['vote_average']*10 }}%</span>
            <span class="mx-2">|</span>
            <span>{{ \Carbon\Carbon::parse($detailsMovie['release_date'])->format('M d, Y') }}</span>
            <span class="mx-2">|</span>
            @foreach ($detailsMovie['genres'] as $genre)
              <span class="ml-1">{{ $genre['name'] }}@if(!$loop->last),@endif</span>
            @endforeach
          </div>
          {{-- Synopsis --}}
          <p class="text-gray-500 mt-4">
            {{ $detailsMovie['overview'] }}
          </p>
          {{-- Cast --}}
          <div class="mt-12">
            <h4 class="text-2xl text-white font-semibold">Starring</h4>
            <div class="flex mt-4">
              @foreach ($detailsMovie['credits']['cast'] as $cast)
                @if ($loop->index < 2)    
                  <div class="mr-5 mt-4">
                    <div>{{ $cast['name'] }}</div>
                    <div class="text-sm text-gray-400">{{ $cast['known_for_department'] }}</div>
                  </div>
                @endif
              @endforeach
              
            </div>
          </div>
          <div class="mt-12">
            <a href="https://youtube.com/watch?v={{ $detailsMovie['videos']['results'][0]['key'] }}" class="flex inline-flex items-center text-gray-900 bg-yellow-600 py-4 px-5 rounded shadow font-semibold hover:bg-yellow-500">
              Trailer
            </a>
          </div>
        {{-- @endforeach --}}
      </div>
    </div>
  </div>
  {{-- Movie Details --}}

    {{-- Cast --}}
    <div class="movie-cast border-b border-gray-800">
      <div class="container mx-auto px-4 py-10">
        <h2 class="text-4xl text-yellow-400 font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
          @foreach ($detailsMovie['credits']['cast'] as $cast)
            @if ($loop->index < 10)
              <div class="mt-8">
                <a href="#" class="mb-0">
                  <img src="https://image.tmdb.org/t/p/w300/{{ $cast['profile_path'] }}" alt="Parasite" class="shadow rounded hover:opacity-75 transition ease-in-out">
                </a>
                <div class="mt-2">
                  <a href="" class="text-md mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
                  <div class="text-gray-400">
                    <p class="text-muted text-xs">{{ $cast['character'] }}</p> 
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
    {{-- Cast --}}

    {{-- Scene --}}
    <div class="scene-movie border-b border-gray-800">
      <div class="container mx-auto px-5 py-10">
        <h2 class="text-4xl text-yellow-400 font-semibold">Scene</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
          @foreach ($detailsMovie['images']['backdrops'] as $scene)
            @if ($loop->index < 6)
              <div class="mt-8">
                <a href="#">
                  <img src="https://image.tmdb.org/t/p/w500/{{ $scene['file_path'] }}" alt="Parasite" class="shadow rounded hover:opacity-75 transition ease-in-out">
                </a>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>

@endsection