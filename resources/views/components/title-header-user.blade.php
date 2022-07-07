<div class="w-full flex flex-col text-center px-2 md:px-44">
  <h1 class="text-user-header font-semibold md:text-[45px] text-dark mb-3">{{ $title }}</h1>
  @if (isset($desc))
  <p class="text-user-base text-dark mb-3">{{ $desc }}</p>
  @endif
  @if (isset($line))
    <hr class="border-dark w-full md:w-3/4 mx-auto mb-3">
  @endif
</div>