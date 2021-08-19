@extends('layouts.main')

@section('content')
  <div class="movie-info border-b border-gray-800">
    {{-- Movie Details --}}
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
      <img src="/img/parasite.jpg" alt="Parasite" class="w-64 shadow rounded md:w-80">
      <div class="md:ml-24">
        {{-- Details Title --}}
        <h2 class="text-4xl font-semibold mb-2">Parasite (2019)</h2>
        <div class="flex items-center text-gray-400 mt-1">
          <span>
            <svg class="fill-current text-yellow-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
          </span>
          <span class="ml-2">90%</span>
          <span class="mx-2">|</span>
          <span>Feb 20, 2021</span>
          <span class="mx-2">|</span>
          <span>Thriller, Comedy, Action</span>
        </div>
        {{-- Synopsis --}}
        <p class="text-gray-500 mt-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit aliquam culpa corporis assumenda omnis ullam quisquam quis at nam veniam consectetur consequuntur reprehenderit quam, magni quas dolor commodi pariatur nobis laudantium non. Incidunt animi, vel unde officia totam consequuntur omnis, nam dignissimos atque, at quae ducimus libero rem repellendus fugiat.
        </p>
        {{-- Cast --}}
        <div class="mt-12">
          <h4 class="text-2xl text-white font-semibold">Cast</h4>
          <div class="flex mt-4">
            <div>
              <div>John Doe</div>
              <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
            </div>
            <div>
              <div>John Doe</div>
              <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
            </div>
          </div>
        </div>
        <div class="mt-12">
          <button class="flex items-center text-gray-900 bg-yellow-600 py-4 px-5 rounded shadow font-semibold hover:bg-yellow-500">
            Trailer
          </button>
        </div>
      </div>
    </div>
  </div>
  {{-- Movie Details --}}

    {{-- Cast --}}
    <div class="movie-cast border-b border-gray-800">
      <div class="container mx-auto px-4 py-10">
        <h2 class="text-4xl text-yellow-400 font-semibold">Scene</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
          @for ($i = 0; $i < 5; $i++)
            <div class="mt-8">
              <a href="#">
                <img src="/img/parasite.jpg" alt="Parasite" class="shadow rounded hover:opacity-75 transition ease-in-out">
              </a>
              <div class="mt-2">
                <a href="" class="text-md mt-2 hover:text-gray-300">Real Name</a>
                <div class="text-gray-400">
                  <p class="text-muted text-xs">Action, Thriller, Comedy</p> 
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
    </div>
    {{-- Cast --}}

    {{-- Scene --}}
    <div class="scene-movie border-b border-gray-800">
      <div class="container mx-auto px-4 py-10">
        <h2 class="text-4xl text-yellow-400 font-semibold">Scene</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
          @for ($i = 0; $i < 5; $i++)
            <div class="mt-8">
              <a href="#">
                <img src="/img/parasite.jpg" alt="Parasite" class="shadow rounded hover:opacity-75 transition ease-in-out">
              </a>
              <div class="mt-2">
                <a href="" class="text-md mt-2 hover:text-gray-300">Real Name</a>
                <div class="text-gray-400">
                  <p class="text-muted text-xs">Action, Thriller, Comedy</p> 
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
    </div>

@endsection