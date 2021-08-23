@extends('layouts.main')

@section('content')
	<div class="container mx-auto px-4 pt-12">
		{{-- Popular tv show --}}
		<div class="popular-tv-show">
			<h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Currently Airing</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@foreach ($airingTodayTVShow as $tvshow)
					<div class="mt-8">
						<x-t-v-card :tvshow="$tvshow" />
					</div>
				@endforeach
			</div>
		</div>
		{{-- Popular tv show --}}

		{{-- Now Playing Movies --}}
		<div class="now-popular-movies pt-16">
			<h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Top Rated TV Show</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-10">
				@foreach ($popularTVShow as $tvshow)
					<div class="mt-8">
						<x-t-v-card :tvshow="$tvshow" />
					</div>
				@endforeach
			</div>
		</div>
		{{-- Now Playing Movies --}}

	</div>
@endsection