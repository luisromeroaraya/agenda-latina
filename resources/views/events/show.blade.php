@extends('layouts.app')

@section('content')
<section class="bg-white text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="p-6">
            <h2 class="tracking-widest text-xl title-font font-medium text-gray-400 mb-1">{{ \Carbon\Carbon::parse($event->date_start)->locale('es_ES')->isoFormat('dddd, D \\d\\e MMMM \\d\\e YYYY') }}</h2>
            <h1 class="text-2xl font-medium mb-1">{{ $event->name }} </h1>
            <h3><a href="{{ route('categories.events', $event->category) }}">{{ $event->category->name }}</a> | <a href="{{ route('users.events', $event->user) }}">{{ $event->place }}</a></h3>
        </div>

        <!-- HERO -->
        <div class="flex mx-auto my-24 md:flex-row flex-col items-center border-2 border-gray-200 border-opacity-60 rounded-lg">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="{{ $event->name }}" src="{{ $event->img_src }}">
            </div>
            <div class="lg:flex-grow flex flex-col items-center">
                <div class="flex items-left flex-wrap my-5 text-center">
                    <a href="https://www.google.com/calendar/render?action=TEMPLATE&text={{ $event->name }}&dates={{ $event->date }}/{{$event->date }}&details=Detalles+del+evento:+http://www.agendalatina.be/events/{{ $event->id }}&location={{ $event->place }}&sf=true&output=xml" 
                        class="text-gray-500 inline-flex items-center md:mb-2 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Agregar a Google Calendar
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="flex items-left flex-wrap">
                    <a href="http://maps.google.com/?q={{ $event->place }}" class="text-gray-500 inline-flex items-center md:mb-2 lg:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Ver en Google Maps
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="flex mx-auto my-24 md:flex-row flex-col items-center border-2 border-gray-200 border-opacity-60 rounded-lg">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 px-10">
                <p>{!! $event->description !!}</p>
            </div>
            <div class="lg:w-full w-5/6 lg:flex-grow flex flex-col items-center mb-10 md:mb-0 px-10">
                <div class="flex flex-wrap items-left w-full">
                    <p>Horario: {{ \Carbon\Carbon::parse($event->date_start)->locale('es_ES')->isoFormat('dddd D MMMM YYYY') }} de {{ \Carbon\Carbon::parse($event->date_start)->toTimeString() }} hasta {{ \Carbon\Carbon::parse($event->date_end)->locale('es_ES')->isoFormat('dddd D MMMM YYYY') }} a las {{ \Carbon\Carbon::parse($event->date_end)->toTimeString() }}</p>                    
                </div>
                <div class="flex flex-wrap items-left w-full">
                    <p>Lugar: {{ $event->place }}</p>
                </div>
                <div class="flex flex-wrap items-left w-full">
                    <p>Dirección: {{ $event->address }}</p>
                </div>
                <div class="flex flex-wrap items-left w-full">
                    <p>Teléfono: {{ $event->telephone }}</p>
                </div>
                <div class="flex flex-wrap items-left w-full">
                    <p>E-mail: {{ $event->email }}</p>
                </div>
                <div class="flex flex-wrap items-left w-full">
                    <p>Más información: <a href="{{ $event->url }}">{{ $event->url }}</a></p>
                </div>
                <div class="flex flex-wrap items-left w-full">
                    <p>Organizador: {{ $event->user->name }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection