<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Evento') }}
        </h2>
    </x-slot>
    <div class="flex justify-center">
        <x-eventform :categories=$categories />
    </div>
</x-app-layout>