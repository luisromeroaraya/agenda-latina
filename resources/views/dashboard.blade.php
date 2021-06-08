@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6">
        <h1>Dashboard</h1>
        <form action="{{ route('dashboard') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Nombre del Evento</label>
                <input type="text" name="name" id="name" placeholder="Nombre del evento" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="date" class="sr-only">Fecha</label>
                <input type="datetime-local" name="date" id="date" placeholder="Fecha" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('date') border-red-500 @enderror" value="{{ old('date') }}">
                @error('date')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="place" class="sr-only">Lugar</label>
                <input type="text" name="place" id="place" placeholder="Lugar" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('place') border-red-500 @enderror" value="{{ old('place') }}">
                @error('place')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="sr-only">Descripción del Evento</label>
                <textarea name="description" id="description" placeholder="Descripción del Evento" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="url" class="sr-only">Link del Evento</label>
                <input type="text" name="url" id="url" placeholder="Link del Evento" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('url') border-red-500 @enderror" value="{{ old('url') }}"></input>
                @error('url')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="img_src" class="sr-only">Imagen</label>
                <input type="text" name="img_src" id="img_src" placeholder="Link de la Imagen" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('img_src') border-red-500 @enderror" value="{{ old('img_src') }}"></input>
                @error('img_src')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3
                        rounded font-medium w-full">Agregar Evento</button>
            </div>
        </form>
    </div>
</div>


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
                        </svg>{{ $event->user->name }}
                    </span>

                    <form class="text-gray-400 inline-flex items-center leading-none text-sm" action="{{ route('dashboard.destroy', $event) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-blue-500">Eliminar Evento</button>
                    </form> 
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

@endsection