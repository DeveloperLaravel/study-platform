<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>@if (session('status'))
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ session('status') }}
    </div>
@endif
