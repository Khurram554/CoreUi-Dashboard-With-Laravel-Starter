<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger text-white btn-sm my-3']) }}>
    {{ $slot }}
</button>
