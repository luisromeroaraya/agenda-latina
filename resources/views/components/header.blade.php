<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <a href="{{ route('home') }}"><img src="/assets/agenda-latina-logo-sm.png" /></a>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('home') }}" class="mr-5 hover:text-gray-900">Inicio</a>            
            <a href="{{ route('events') }}" class="mr-5 hover:text-gray-900">Eventos</a>
        </nav>
        <!-- IF LOGGED IN -->
        @auth
        <a href="{{ route('dashboard') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 mx-1 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
            {{ auth()->user()->name }}
        </a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 mx-1 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Salir</button>
        </form>

        @endauth
        <!-- IF NOT LOGGED IN -->
        @guest
        <a href="{{ route('login') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 mx-1 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Entrar</a>
        <a href="{{ route('register') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 mx-1 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Registrarse</a>
        @endguest
    </div>
</header>