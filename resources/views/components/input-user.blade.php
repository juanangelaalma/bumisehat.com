@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'mt-1 h-[49px] border-gray-300 rounded-lg shadow-sm focus:border-primary-index focus:ring focus:ring-opacity-50 focus:ring-1 focus:ring-primary-index focus-within:text-primary-index']) !!}>
