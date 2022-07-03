<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-[15px] text-lg font-medium leading-5 text-center text-white transition-colors duration-150 bg-primary-index border border-transparent rounded-lg active:bg-primary-dark hover:bg-primary-dark focus:outline-none focus:ring']) }}>
  {{ $slot }}
</button>
