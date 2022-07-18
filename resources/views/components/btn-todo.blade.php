<div class="flex justify-end space-x-2 w-full items-center">
  <span class="text-base md:text-base text-dark-gray font-normal">Apakah sudah dilakukan?</span>
  <form action="{{ route('pregnancy.done', $id) }}" method="POST">
    @csrf
    <button type="submit" class="px-7 py-3 bg-primary-index truncate rounded-2xl text-white hover:bg-primary-dark transition-colors duration-300 cursor-pointer">😁 Sudah</button>
  </form>
</div>