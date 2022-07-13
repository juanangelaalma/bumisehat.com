<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between nowrap w-full">
            {{ __('Tentang Bumil Sehat') }}
        </div>
    </x-slot>
    <div class="container grid">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <form
                    class="flex flex-wrap items-end md:grid-cols-2 px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 space-y-2"
                    action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label class="block text-sm w-full md:w-1/2 pr-2">
                        <span class="text-gray-700 mb-1 dark:text-gray-400">
                            Whatsapp
                        </span>
                        <input
                            class="block w-full mt-1 text-sm rounded-md @error('wa') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input"
                            placeholder="083xxxxxxxxx" name="wa" value="{{ $about->whatsapp }}" />
                        @error('wa')
                            <span class="text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </span>
                        @enderror
                    </label>

                    <label class="block text-sm w-full md:w-1/2 pl-2">
                        <span class="text-gray-700 mb-1 dark:text-gray-400">
                            Email
                        </span>
                        <input
                            class="block w-full mt-1 text-sm rounded-md @error('email') border-red-600 focus:border-red-400 @enderror focus:outline-none focus:shadow-outline-purple form-input"
                            placeholder="info@bumilsehat.com" name="email" value="{{ $about->email }}" />
                        @error('email')
                            <span class="text-xs text-red-600 dark:text-red-400">
                                {{ $message }}
                            </span>
                        @enderror
                    </label>

                    <label class="flex flex-col text-sm w-full pb-3">
                        <span class="text-gray-700 mb-1 dark:text-gray-400">
                            Deskripsi 
                        </span>
                        <textarea class="form-control" name="body" id="body">{{ $about->body }}</textarea>
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
        <script>
            function confirmDelete(url) {
                Swal.fire({
                    title: 'Apakah kamu yakun?',
                    text: 'Data ini akan dihapus secara permanen',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, saya yakin'
                }).then(function(value) {
                    if (value.isConfirmed) {
                        window.location.href = url
                    }
                })
            }
        </script>
        <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('js/tinymce/config.js') }}"></script>
</x-app-layout>
