@extends('layouts.main')

@section('content')
	<div class="container mx-auto px-4 pt-12">
		<div class="popular-actors">
			<h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Actors</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 border-b border-gray-800 py-10">
        @foreach ($popularActors as $actor)
          <div class="actor mt-8">
            <a href="{{ route('actors.show', $actor['id']) }}">
              <img src="{{ $actor['profile_path'] }}" alt="{{ $actor['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="mt-2">
              <a href="" class="hover:text-gray-300 text-lg ">{{ $actor['name'] }}</a>
              <div class="text-muted truncate text-gray-400">{{ $actor['known_for'] }}</div>
            </div>
          </div>
        @endforeach
			</div>
		</div>

    <div class="page-load-status my-8">
      <p class="infinite-scroll-last text-2xl font-semibold">End of content</p>
      <p class="infinite-scroll-error">Error</p>
    </div>
    {{-- <div class="flex justify-between mt-16 mb-5">
      @if ($previous)
        <a href="/actors/page/{{ $previous }}" class="bg-blue-700 py-1 px-3 rounded hover:bg-blue-800">Previous</a>
      @endif
      @if ($next)
        <a href="/actors/page/{{ $next }}" class="bg-blue-700 py-1 px-3 rounded hover:bg-blue-800">Next</a>
      @endif
    </div> --}}
	</div>
@endsection

@section('script')
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
<script>
  let elem = document.querySelector('.grid');
  let infScroll = new InfiniteScroll( elem, {
    // options
    path: '/actors/page/@{{#}}',
    append: '.actor',
    status: '.page-load-status'
    // history: false,
  });
</script>
@endsection