@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="md:w-1/2 w-5/6 bg-white p-6">
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
                <label for="category_id" class="sr-only">Categoría</label>
                <select name="category_id" id="category_id" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('category_id') border-red-500 @enderror" value="{{ old('category_id') }}">
                    <option>Elegir Categoría:</option>
                    @if ($categories->count())
                        @foreach ($categories as $category)
                        <x-option :option="$category"/>
                        @endforeach
                    @endif
                </select>
                @error('category_id')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="flex mb-4">
                <label for="date_start" class="sr-only">Fecha de Inicio</label>
                <div class="bg-gray-100 border-2 p-4 rounded-lg @error('date_start') border-red-500 @enderror">Inicio:</div>
                <input type="datetime-local" name="date_start" id="date_start" placeholder="Fecha de Inicio" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('date_start') border-red-500 @enderror" value="{{ old('date_start') }}">
                @error('date_start')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="flex mb-4">
                <label for="date_end" class="sr-only">Fecha de Término</label>
                <div class="bg-gray-100 border-2 p-4 rounded-lg @error('date_end') border-red-500 @enderror">Fin:</div>
                <input type="datetime-local" name="date_end" id="date_end" placeholder="Fecha de Término" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('date_end') border-red-500 @enderror" value="{{ old('date_end') }}">
                @error('date_end')
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
                <label for="address" class="sr-only">Dirección</label>
                <input type="text" name="address" id="address" placeholder="Dirección" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('address') border-red-500 @enderror" value="{{ old('address') }}">
                @error('address')
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
                <label for="telephone" class="sr-only">Teléfono de Contacto</label>
                <input type="tel" name="telephone" id="telephone" placeholder="Teléfono de Contacto" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('telephone') border-red-500 @enderror" value="{{ old('telephone') }}"></input>
                @error('telephone')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email de Contacto</label>
                <input type="email" name="email" id="email" placeholder="Email de Contacto" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}"></input>
                @error('email')
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
                <label for="img_src" class="sr-only">Link de Imagen del Evento</label>
                <input type="text" name="img_src" id="img_src" placeholder="Link de la Imagen del Evento" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('img_src') border-red-500 @enderror" value="{{ old('img_src') }}"></input>
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
                        </svg><a href="{{ route('users.events', $event->user) }}">{{ $event->user->name }}</a>
                    </span>

                    @can('delete', $event)
                    <form class="text-gray-400 inline-flex items-center leading-none text-sm" action="{{ route('dashboard.destroy', $event) }}" method="post">
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

@endsection