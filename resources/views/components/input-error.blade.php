@props(['messages'])

@if ($messages)

        @foreach ((array) $messages as $message)

            <div class="invalid-feedback d-block">
                {{ $message }}
              </div>

        @endforeach

@endif
