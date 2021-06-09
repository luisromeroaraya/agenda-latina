@props(['event' => $event])

<div class="p-4 md:w-1/3">
    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
    <a href="{{ route('events.show', $event) }}"><img class="lg:h-48 md:h-36 w-full object-cover object-center" src={{ $event->img_src }} alt={{ $event->name }}></a>
        <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium mb-1">{{ $event->date_start }}</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $event->name }}</h1>
            <p class="leading-relaxed mb-3">{!! $event->description !!}</p>
            <div class="flex items-center flex-wrap ">
                <a class="text-blue-500 inline-flex items-center md:mb-2 lg:mb-0"><a href="{{ route('events.show', $event) }}">Leer más</a>
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg><a href="{{ route('users.events', $event->user) }}">{{ $event->user->name }}</a>
                </span>                
            </div>
        </div>
    </div>
</div>