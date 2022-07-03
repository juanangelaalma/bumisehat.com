@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-light text-base text-dark']) }}>
    {{ $value ?? $slot }}
</label>
