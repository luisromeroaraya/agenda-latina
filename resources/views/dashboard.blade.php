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
@endsection