<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-primary-index border border-transparent rounded-lg active:bg-primary-index hover:bg-primary-dark focus:outline-none focus:ring']) }}>
    {{ $slot }}
</button>
