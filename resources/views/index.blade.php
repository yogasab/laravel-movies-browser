@extends('layouts.main')

@section('content')
	<div class="container mx-auto px-4 pt-12">
		{{-- Now Playing Movies --}}
		<div class="popular-movies">
			<h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Movies</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@for ($i = 0; $i < 8; $i++)
					<div class="mt-8">
						<a href="#">
							<img src="/img/parasite.jpg" alt="Parasite" class="shadow rounded hover:opacity-75 transition ease-in-out">
						</a>
						<div class="mt-2">
							<a href="" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
							<div class="flex items-center text-gray-400">
								<span>
									<svg class="fill-current text-yellow-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
								</span>
								<span class="ml-2">90%</span>
								<span class="mx-2">|</span>
								<span>Feb 20, 2021</span>
							</div>
							<div class="text-gray-400">
								Action, Thriller, Comedy
							</div>
						</div>
					</div>
				@endfor
			</div>
		</div>
		{{-- Now Playing Movies --}}

		{{-- Now Playing Movies --}}
		<div class="now-popular-movies pt-16">
			<h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Now Playing</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				@for ($i = 0; $i < 8; $i++)
					<div class="mt-8">
						<a href="#">
							<img src="/img/parasite.jpg" alt="Parasite" class="shadow rounded hover:opacity-75 transition ease-in-out">
						</a>
						<div class="mt-2">
							<a href="" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
							<div class="flex items-center text-gray-400">
								<span>
									<svg class="fill-current text-yellow-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
								</span>
								<span class="ml-2">90%</span>
								<span class="mx-2">|</span>
								<span>Feb 20, 2021</span>
							</div>
							<div class="text-gray-400">
								Action, Thriller, Comedy
							</div>
						</div>
					</div>
				@endfor
			</div>
		</div>
		{{-- Now Playing Movies --}}

	</div>
@endsection