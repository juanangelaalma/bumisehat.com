@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-base text-dark']) }}>
    {{ $value ?? $slot }}
</label>
