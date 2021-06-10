@extends('layouts.app')

@section('content')
<section class="bg-white text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center">
      <h1>Inicio</h1>
    </div>

    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          @if ($highlights->count())
          @foreach ($highlights as $highlight)
          <li class="glide__slide">
            <!-- HERO -->
            <div class="flex mx-auto my-24 md:flex-row flex-col items-center border-2 border-gray-200 border-opacity-60 rounded-lg">
              <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="{{ $highlight->name }}" src="{{ $highlight->img_src }}">
              </div>
              <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-start text-left">
                <h2 class="tracking-widest text-xs title-font font-medium mb-1">{{ \Carbon\Carbon::parse($highlight->date_start)->locale('es_ES')->isoFormat('dddd, D \\d\\e MMMM \\d\\e YYYY') }}</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $highlight->name }}</h1>
                <p class="leading-relaxed mb-3">{{ $highlight->description }}</p>
                <div class="flex items-center flex-wrap ">
                  <a class="text-blue-500 inline-flex items-center md:mb-2 lg:mb-0"><a href="{{ route('events.show', $highlight) }}">Leer más</a>
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14"></path>
                      <path d="M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                  <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    <a href="{{ route('categories.events', $highlight->category) }}">{{ $highlight->category->name }}</a>
                  </span>
                  <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg><a href="{{ route('users.events', $highlight->user) }}">{{ $highlight->user->name }}</a>
                  </span>
                </div>
              </div>
            </div>
          </li>
          @endforeach
          @else
          <p>Ningún Evento</p>
          @endif
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
    </div>


    <div class="glide glide_concerts mb-24">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          @if ($concerts->count())
          @foreach ($concerts as $concert)
          <li class="glide__slide">
            <x-event :event="$concert" />
          </li>
          @endforeach
          @else
          <p>Ningún Evento</p>
          @endif
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
    </div>

    <div class="glide glide_parties mb-24">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          @if ($parties->count())
          @foreach ($parties as $party)
          <li class="glide__slide">
            <x-event :event="$party" />
          </li>
          @endforeach
          @else
          <p>Ningún Evento</p>
          @endif
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
    </div>

    <div class="glide glide_exhibitions mb-24">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          @if ($exhibitions->count())
          @foreach ($exhibitions as $exhibition)
          <li class="glide__slide">
            <x-event :event="$exhibition" />
          </li>
          @endforeach
          @else
          <p>Ningún Evento</p>
          @endif
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>
@endsection