<svg  {{ $attributes->merge(['class' => $class ])}} >
    <use xlink:href="{{asset('assets/icons/sprites/free.svg')}}#{{ $icon }}"></use>
</svg>
