@if (session('message'))
    <div {{ $attributes }}>
        <div class="font-medium text-green-600">
            {{ __('Éxito!') }}
        </div>
        <div class="mt-3 list-disc list-inside text-sm text-green-600">
            {{ session('message') }}
        </div>
    </div>
@endif