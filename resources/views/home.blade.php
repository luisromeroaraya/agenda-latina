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
            <x-hero :event="$highlight" />
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