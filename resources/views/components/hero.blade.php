@props(['event' => $event])

<!-- HERO -->
<div class="flex mx-auto mb-24 md:flex-row flex-col items-center border-2 border-gray-200 border-opacity-60 rounded-lg">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <a href="{{ route('events.show', $event) }}">
            <img class="object-cover object-center rounded" alt="{{ $event->name }}" src="{{ $event->img_src }}">
        </a>
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 md:pr-16 flex flex-col md:items-start md:text-left items-start text-left">
        <h2 class="tracking-widest text-xs title-font font-medium mb-1">{{ \Carbon\Carbon::parse($event->date_start)->locale('es_ES')->isoFormat('dddd, D \\d\\e MMMM \\d\\e YYYY') }}</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $event->name }}</h1>
        <a href="{{ route('events.show', $event) }}">
            <p class="leading-relaxed mb-3 ">{{ $event->description }}</p>
        </a>
        <div class="flex items-center flex-wrap ">
            <a class="text-blue-500 inline-flex items-center md:mb-2 lg:mb-0"><a href="{{ route('events.show', $event) }}">Leer más</a>
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
            <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <a href="{{ route('categories.events', $event->category) }}">{{ $event->category->name }}</a>
            </span>
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg><a href="{{ route('users.events', $event->user) }}">{{ $event->user->name }}</a>
            </span>
        </div>
    </div>
</div>