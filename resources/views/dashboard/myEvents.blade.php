<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis Eventos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- GRID -->
                    <div class="flex flex-wrap m-4  ">
                        @if ($events->count())
                        @foreach ($events as $event)
                        <div class="p-4 md:w-1/3 ">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden bg-white">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src={{ $event->img_src }} alt={{ $event->name }}>
                                <div class="p-6">
                                    <h2 class="tracking-widest text-xs title-font font-medium mb-1">{{ $event->date }}</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $event->name }}</h1>
                                    <p class="leading-relaxed mb-3">{!! $event->description !!}</p>
                                    <div class="flex items-center flex-wrap ">
                                        <a class="text-blue-500 inline-flex items-center md:mb-2 lg:mb-0">Leer más
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg><a href="{{ route('myevents.edit', $event) }}">Modificar Evento</a>
                                        </span>

                                        @can('delete', $event)
                                        <form class="text-gray-400 inline-flex items-center leading-none text-sm" action="{{ route('myevents.destroy', $event) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-blue-500">Eliminar Evento</button>
                                        </form>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <p>Ningun Evento</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>