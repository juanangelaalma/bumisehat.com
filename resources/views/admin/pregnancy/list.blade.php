<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between nowrap w-full">
        {{ __('Daftar Pengingat') }}
        <x-link href="{{ route('admin.pregnancy_alerts.list.create') }}" class="px-10"><span class="font-bold">{{ __('+ ') }}</span> Buat pengingat baru</x-link>
      </div>
  </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
      <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-user-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Judul Pengingat</th>
                        <th class="px-4 py-3">Isi</th>
                        <th class="px-4 py-3 text-center">Minggu ke</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($pregnancy_alerts as $pregnancy)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                        @if($pregnancy->image)
                                          <img class="object-cover w-full h-full rounded-full"
                                          onerror="pictureError(event, this)"
                                          noimageshandler={{ asset("images/broken/no-pictures.png") }}
                                          src="{{ asset("storage/uploads/pregnancy_alerts/thumbnails/$pregnancy->image") }}" alt=""
                                          loading="lazy" />
                                        @else
                                          <img class="object-cover w-full h-full rounded-full"
                                          src="{{ asset("images/broken/no-pictures.png") }}" alt=""
                                          loading="lazy" />
                                        @endif
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold truncate">{{ $pregnancy->title }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm truncate">
                                {{ strip_tags(substr(str_replace("&nbsp;", "", $pregnancy->content), 0, 70), null) }} ...
                            </td>
                            <td class="px-4 text-center py-3 text-sm truncate">
                              {{ $pregnancy->weeks }}
                            </td>
                            <td class="px-4 py-3 text-sm flex nowrap">
                                <a href="{{ route('admin.pregnancy_alerts.list.edit', $pregnancy) }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 mr-1 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                                <button onclick="confirmDelete('{{ route('admin.pregnancy_alerts.list.destroy', $pregnancy) }}')"
                                    class="delete-confirm focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 mr-1 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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

        function pictureError(e, el) {
          el.src = el.getAttribute('noimageshandler')
        }
    </script>
    </div>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/tinymce/config.js') }}"></script>
</x-app-layout>
