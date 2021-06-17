<x-guest-layout>
  <section class="bg-white text-gray-600 body-font">
    <x-search />
    <div class="container px-5 py-24 mx-auto">
      <div class="text-center">
        <h1>Eventos</h1>
      </div>
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @if ($events->count())
            @foreach ($events as $event)
            <li class="glide__slide">
              <x-hero :event="$event" />
            </li>
            @endforeach
            @else
            <p>Ningún Evento Destacado</p>
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

      <!-- GRID -->
      <div class="flex flex-wrap -m-4">
        @if ($events->count())
        @foreach ($events as $event)
        <div class="p-4 md:w-1/3">
          <x-event :event="$event" />
        </div>
        @endforeach
      </div>
      {{ $events->links() }}
      @else
      <p>Ningún Evento</p>
      @endif
    </div>
  </section>
</x-guest-layout>