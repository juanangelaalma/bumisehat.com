<div class="w-full flex flex-col text-center px-2 md:px-44 mb-4">
  <h1 class="text-[20px] md:text-[26px] font-semibold text-primary-index mb-2">{{ $title }}</h1>
  @if (isset($desc))
  <p class="text-base text-dark mb-3">{{ $desc }}</p>
  @endif
  @if (isset($line))
    <hr class="border-dark w-3/4 md:w-1/4 mx-auto">
  @endif
</div>