<x-guest-layout>
    <section class="bg-white text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="mb-8">
                <h1 class="font-semibold text-5xl text-gray-800 leading-tight">
                    {{ __('Agenda Latina') }}
                </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quam praesentium libero! Excepturi libero earum culpa minus assumenda adipisci ducimus neque, harum nemo hic facilis ex, mollitia, dolor porro soluta!</p>
            </div>
            <!--- HERO HIGHLIGHTS --->
            <div class="glide">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Destacados') }}
                </h2>
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

            <!--- EVENTS --->
            <div class="glide glide_parties mb-24">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Próximas Fiestas') }}
                </h2>
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
            <div class="glide glide_concerts mb-24">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Próximos Conciertos') }}
                </h2>
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
            <div class="glide glide_sports mb-24">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Eventos Deportivos') }}
                </h2>
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @if ($sports->count())
                        @foreach ($sports as $sport)
                        <li class="glide__slide">
                            <x-event :event="$sport" />
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
            <div class="glide glide_festivals mb-24">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Próximos Festivales') }}
                </h2>
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @if ($festivals->count())
                        @foreach ($festivals as $festival)
                        <li class="glide__slide">
                            <x-event :event="$festival" />
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
            <div class="glide glide_expositions mb-24">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Próximas Exposiciones') }}
                </h2>
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @if ($expositions->count())
                        @foreach ($expositions as $exposition)
                        <li class="glide__slide">
                            <x-event :event="$exposition" />
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
            <div class="glide glide_plays mb-24">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Próximas Obras de Teatro') }}
                </h2>
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @if ($plays->count())
                        @foreach ($plays as $play)
                        <li class="glide__slide">
                            <x-event :event="$play" />
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
            <div class="glide glide_projections mb-24">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Próximas Películas') }}
                </h2>
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @if ($projections->count())
                        @foreach ($projections as $projection)
                        <li class="glide__slide">
                            <x-event :event="$projection" />
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
            <div class="glide glide_dances mb-24">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Próximos Espectáculos de Danza') }}
                </h2>
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @if ($dances->count())
                        @foreach ($dances as $dance)
                        <li class="glide__slide">
                            <x-event :event="$dance" />
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
            <div class="glide glide_kids mb-24">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Próximos Eventos Infantiles') }}
                </h2>
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @if ($kids->count())
                        @foreach ($kids as $kid)
                        <li class="glide__slide">
                            <x-event :event="$kid" />
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
            <div class="glide glide_talks mb-24">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Próximas Charlas y Conferencias') }}
                </h2>
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @if ($talks->count())
                        @foreach ($talks as $talk)
                        <li class="glide__slide">
                            <x-event :event="$talk" />
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
            <div class="glide glide_others mb-24">
                <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
                    {{ __('Otras Actividades') }}
                </h2>
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @if ($others->count())
                        @foreach ($others as $other)
                        <li class="glide__slide">
                            <x-event :event="$other" />
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
</x-guest-layout>