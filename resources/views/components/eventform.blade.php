<div class="md:w-1/2 w-5/6 bg-white p-6">
    <form action="{{ route('dashboard.create') }}" method="post">
        @csrf
        <div class="mb-4">
            <label for="name" class="sr-only">Nombre del Evento</label>
            <input type="text" name="name" id="name" placeholder="Nombre del evento" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ isset($event) ? $event->name : old('name') }}">
            @error('name')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="category_id" class="sr-only">Categoría</label>
            <select name="category_id" id="category_id" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('category_id') border-red-500 @enderror" value="{{ isset($event) ? $event->category_id : old('category_id') }}">
                <option>Elegir Categoría:</option>
                @if ($categories->count())
                @foreach ($categories as $category)
                <x-option :option="$category" />
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
            <input type="datetime-local" name="date_start" id="date_start" placeholder="Fecha de Inicio" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('date_start') border-red-500 @enderror" value="{{ isset($event) ? date('Y-m-d\TH:i', strtotime($event->date_start)) : old('date_start') }}">
            @error('date_start')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="flex mb-4">
            <label for="date_end" class="sr-only">Fecha de Término</label>
            <div class="bg-gray-100 border-2 p-4 rounded-lg @error('date_end') border-red-500 @enderror">Fin:</div>
            <input type="datetime-local" name="date_end" id="date_end" placeholder="Fecha de Término" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('date_end') border-red-500 @enderror" value="{{ isset($event) ? date('Y-m-d\TH:i', strtotime($event->date_end)) : old('date_end') }}">
            @error('date_end')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="place" class="sr-only">Lugar</label>
            <input type="text" name="place" id="place" placeholder="Lugar" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('place') border-red-500 @enderror" value="{{ isset($event) ? $event->place : old('place') }}">
            @error('place')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="address" class="sr-only">Dirección</label>
            <input type="text" name="address" id="address" placeholder="Dirección" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('address') border-red-500 @enderror" value="{{ isset($event) ? $event->address : old('address') }}">
            @error('address')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="sr-only">Descripción del Evento</label>
            <textarea name="description" id="description" placeholder="Descripción del Evento" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('description') border-red-500 @enderror">{{ isset($event) ? $event->description : old('description') }}</textarea>
            @error('description')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="telephone" class="sr-only">Teléfono de Contacto</label>
            <input type="tel" name="telephone" id="telephone" placeholder="Teléfono de Contacto" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('telephone') border-red-500 @enderror" value="{{ isset($event) ? $event->telephone : old('telephone') }}"></input>
            @error('telephone')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="sr-only">Email de Contacto</label>
            <input type="email" name="email" id="email" placeholder="Email de Contacto" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ isset($event) ? $event->email : old('email') }}"></input>
            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="url" class="sr-only">Link del Evento</label>
            <input type="text" name="url" id="url" placeholder="Link del Evento" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('url') border-red-500 @enderror" value="{{ isset($event) ? $event->url : old('url') }}"></input>
            @error('url')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="img_src" class="sr-only">Link de Imagen del Evento</label>
            <input type="text" name="img_src" id="img_src" placeholder="Link de la Imagen del Evento" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('img_src') border-red-500 @enderror" value="{{ isset($event) ? $event->img_src : old('img_src') }}"></input>
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