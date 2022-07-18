<x-app-layout>
  <x-slot name="header">
      <div class="flex items-center justify-between nowrap w-full">
          {{ __('Tambah short content') }}
      </div>
  </x-slot>
  <div class="container grid">
      <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
          <div class="w-full overflow-x-auto">
              <!-- Invalid input -->
              <form
                  class="flex flex-wrap items-end md:grid-cols-2 px-4 py-3 mb-8 bg-white rounded-lg shadow-md space-y-2"
                  action="{{ route('admin.short_content.update', $short_content->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method("PUT")
                  <label class="block text-sm w-full md:w-1/2 md:pr-2">
                      <span class="text-gray-700 mb-1 dark:text-gray-400">
                          Judul short content
                      </span>
                      <input
                          class="block w-full mt-1 text-sm rounded-md @error('title') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input"
                          placeholder="Masukkan judul short content" name="title" value="{{ $short_content->title }}" />
                      @error('title')
                          <span class="text-xs text-red-600 dark:text-red-400">
                              {{ $message }}
                          </span>
                      @enderror
                  </label>

                  <label class="flex flex-col text-sm w-full md:w-1/2 md:pl-2">
                      <span class="text-gray-700 mb-1 dark:text-gray-400">
                          Gambar
                      </span>
                      <input name="image" class="rounded-md" type="file" />
                      @error('image')
                          <span class="text-xs text-red-600 dark:text-red-400">
                              {{ $message }}
                          </span>
                      @enderror
                  </label>

                  <label class="flex flex-col text-sm w-full pb-3">
                      <span class="text-gray-700 mb-1 dark:text-gray-400">
                          Body
                      </span>
                      <textarea class="form-control" name="body" id="body">{{ $short_content->body }}</textarea>
                      @error('body')
                          <span class="text-xs text-red-600 dark:text-red-400">
                              {{ $message }}
                          </span>
                      @enderror
                  </label>
                  <x-button class="w-full">SIMPAN</x-button>
              </form>
          </div>
      </div>
      </main>
      <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
      <script src="{{ asset('js/tinymce/config.js') }}"></script>
</x-app-layout>
