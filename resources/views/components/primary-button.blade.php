<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary btn-sm my-3']) }}>
    {{ $slot }}
</button>
