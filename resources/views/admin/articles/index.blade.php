<x-app-layout>
    <x-slot name="header">
      <div class="flex items-center justify-between nowrap w-full">
          {{ __('Materi') }}
          <x-link href="{{ route('admin.articles.create') }}" class="px-10"><span class="font-bold">{{ __('+ ') }}</span> Buat materi baru</x-link>
        </div>
    </x-slot>
    <div class="container grid">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-user-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Judul</th>
                            <th class="px-4 py-3">Isi</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($articles as $article)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="{{ asset("storage/uploads/articles/thumbnails/$article->image") }}" alt=""
                                                loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-semibold truncate">{{ $article->title }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm truncate">
                                    {{ strip_tags(substr(str_replace("&nbsp;", "", $article->body), 0, 70), null) }} ...
                                </td>
                                <td class="px-4 py-3 text-sm flex nowrap">
                                    <a href="{{ route('admin.articles.edit', $article) }}"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 mr-1 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                                    <button onclick="confirmDelete('{{ route('admin.articles.destroy', $article) }}')"
                                        class="delete-confirm focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 mr-1 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                {{ $articles->links() }}
            </div>
        </div>
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
                    if(value.isConfirmed) {
                        window.location.href = url
                    }
                })
            }
        </script>
</x-app-layout>
