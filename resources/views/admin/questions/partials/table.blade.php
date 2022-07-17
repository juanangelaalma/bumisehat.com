<table class="w-full whitespace-no-wrap">
  <thead>
      <tr
          class="text-user-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">Nama User</th>
          <th class="px-4 py-3">Puskesmas</th>
          <th class="px-4 py-3">Action</th>
      </tr>
  </thead>
  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
      @foreach ($users as $user)
          <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                      <p class="font-semibold truncate">{{ $user->name }}</p>
                  </div>
              </td>
              <td class="px-4 py-3 text-sm truncate">
                <p class="font-semibold truncate">{{ $user->puskesmas }}</p>
              </td>
              <td class="px-4 py-3 text-sm flex nowrap">
                  <a href="{{ route($routeShow, $user) }}"
                      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-normal rounded-lg text-xs px-3 py-1 mr-1 mb-2 truncate">Lihat jawaban</a>
                  {{-- <button onclick="confirmDelete('{{ route('admin.articles.destroy', $article) }}')"
                      class="delete-confirm focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 mr-1 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button> --}}
              </td>
          </tr>
      @endforeach
  </tbody>
</table>