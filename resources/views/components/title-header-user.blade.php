<div class="w-full flex flex-col space-y-5 text-center px-5 md:px-44 mb-8">
  <h1 class="text-user-header font-semibold text-dark">{{ $title }}</h1>
  @if (isset($desc))
  <div class="md:w-1/2 mx-auto">
    <p class="text-base text-dark">{{ $desc }}</p>
  </div>
  @endif
  @if (isset($line))
    <hr class="border-dark w-full md:w-1/2 mx-auto">
  @endif
</div>