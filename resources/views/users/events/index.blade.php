@extends('layouts.app')

@section('content')
<section class="bg-white text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="p-6 text-center">
      <h1 class="text-2xl font-medium mb-1">Eventos creados por {{ $user->name }} </h1>
      <p>Total: {{ $events->total() }} {{ Str::plural('evento', $events->count()) }}</p>
    </div>
    <div class="flex flex-wrap -m-4">
      @if ($events->count())
      @foreach ($events as $event)
      <x-event :event="$event" />
      @endforeach
    </div>
    {{ $events->links() }}
    @else
    <p>{{ $user->name }} no ha creado Eventos.</p>
    @endif
  </div>
</section>
@endsection