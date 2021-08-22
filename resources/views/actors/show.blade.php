@extends('layouts.main')

@section('content')
  <div class="actor border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
      {{-- Social Media --}}
      <div class="flex-none">
        <img src="https://via.placeholder.com/500x750" alt="Actors" class="w-64 shadow rounded md:w-80">
        <ul class="flex items-center mt-4">
          <li>
            <a href="#" title="Facebook">
              <svg class="fill-current text-gray-400 hover:text-white w-6" viewBox="0 0 448 512">
                <path d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"/>
              </svg>
            </a>
          </li>
          <li>
            <a href="#" title="Facebook">
              <svg class="fill-current text-gray-400 hover:text-white w-6 ml-2" viewBox="0 0 448 512">
                <path d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"/>
              </svg>
            </a>
          </li>
          <li>
            <a href="#" title="Facebook">
              <svg class="fill-current text-gray-400 hover:text-white w-6 ml-2" viewBox="0 0 448 512">
                <path d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"/>
              </svg>
            </a>
          </li>
        </ul>
      </div>
    {{-- End Social Media --}}

      <div class="md:ml-24">
        {{-- Details Actor --}}
          <h2 class="text-5xl font-semibold mb-2">Test</h2>
          <div class="flex items-center text-gray-400 mt-1">
            <span>
              <svg class="fill-current text-yellow-400 hover:text-white w-4" viewBox="0 0 448 512"><path d="M448 384c-28.02 0-31.26-32-74.5-32-43.43 0-46.825 32-74.75 32-27.695 0-31.454-32-74.75-32-42.842 0-47.218 32-74.5 32-28.148 0-31.202-32-74.75-32-43.547 0-46.653 32-74.75 32v-80c0-26.5 21.5-48 48-48h16V112h64v144h64V112h64v144h64V112h64v144h16c26.5 0 48 21.5 48 48v80zm0 128H0v-96c43.356 0 46.767-32 74.75-32 27.951 0 31.253 32 74.75 32 42.843 0 47.217-32 74.5-32 28.148 0 31.201 32 74.75 32 43.357 0 46.767-32 74.75-32 27.488 0 31.252 32 74.5 32v96zM96 96c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40zm128 0c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40zm128 0c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40z"/>
              </svg>
            </span>
            <span class="ml-2 mt-1 text-md text-muted">Feb 20, 1987 (40 years old) in Jakarta, Indonesia</span>
          </div>

          {{-- Biography --}}
          <p class="text-gray-500 mt-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda voluptatibus modi soluta est quos quasi porro suscipit eaque officia, aliquid maxime deleniti laboriosam nam quam velit vero ipsa, aperiam ducimus.
          </p>

          {{-- Known for --}}
          <div class="mt-12">
            <h4 class="text-2xl text-white font-semibold">Known for</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
              @for ($i = 0; $i < 5; $i++)
                <div class="mt-4">
                  <a href="#">
                    <img src="https://via.placeholder.com/250x350" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
                  </a>
                  <a href="#" class="text-sm leading-normal block text-gray-400 hover:text-white mt-1">
                    Lorem ipsum 
                  </a>
                </div>
              @endfor
            </div>
          </div>

        {{-- @endforeach --}}
      </div>
    </div>
  </div>

  <div class="credits border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Credits</h2>
        <ul class="list-disc leading-loose pl-5 mt-8">
          <li>
              Stranger Things (2020 - 2030)
          </li>
        </ul>
    </div>
  </div> <!-- end credits-->


@endsection