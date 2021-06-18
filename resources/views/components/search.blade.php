<div class="p-8 w-5/6 md:w-1/2 mx-auto">
    <form action="{{ route('events.search') }}" method="POST">
        @csrf
        <div class="bg-white flex items-center rounded-full shadow-xl">
            <input class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight border-transparent focus:border-transparent focus:ring-0" name="search" id="search" type="text" placeholder="Buscar" value="{{ request('search') }}">
            <div class="p-4">
                <button class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 border-transparent focus:border-transparent focus:ring-0 w-12 h-12 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>