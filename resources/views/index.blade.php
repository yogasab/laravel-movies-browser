@extends('layouts.main')

@section('content')
	<div class="container mx-auto px-4 pt-12">
		{{-- Now Playing Movies --}}
		<div class="popular-movies">
			<h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Movies</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@foreach ($popularMovies as $movies)
					<div class="mt-8">
						<x-movie-card :movies="$movies" :genres="$genres" />
					</div>
				@endforeach
			</div>
		</div>
		{{-- Now Playing Movies --}}

		{{-- Now Playing Movies --}}
		<div class="now-popular-movies pt-16">
			<h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Now Playing</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@foreach ($nowPlayingMovies as $movies)
					<div class="mt-8">
						<x-movie-card :movies="$movies" :genres="$genres" />
					</div>
				@endforeach
			</div>
		</div>
		{{-- Now Playing Movies --}}

	</div>
@endsection