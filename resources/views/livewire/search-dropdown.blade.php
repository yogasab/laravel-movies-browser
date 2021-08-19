<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
    <input 
      wire:model.debounce.400ms="keyword" 
      type="text" 
      name="search" 
      id="search" 
      class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search ..."
      @focus="isOpen = true"
      @keydown.shift.tab = "isOpen = false"
      @keydown.escape.window="isOpen = false">
    @if (strlen($keyword) > 3)
      <div class="z-50 absolute bg-gray-800 rounded w-64 mt-4" x-show="isOpen">
        @if ($keywordResults->count())
          <ul>
            @foreach ($keywordResults as $result)
              <li class="border-b border-gray-700">
                <a href="{{ route('movies', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                  <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="{{ $result['title'] }}" class="w-8">
                  <span class="ml-4">{{ $result['title'] }}</span>
                </a>
              </li>
            @endforeach        
          </ul>
        @else
          <div class="px-3 py-3">{{ $keyword }} not found.</div>
        @endif
      </div>
    @endif
</div>

