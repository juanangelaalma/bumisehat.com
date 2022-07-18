<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between nowrap w-full">
            {{ __('Users') }}
        </div>
    </x-slot>
    <div class="container grid">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-user-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">Puskesmas</th>
                            <th class="px-4 py-3">Alamat</th>
                            <th class="px-4 py-3">Tanggal Hamil</th>
                            <th class="px-4 py-3">Usia Hamil(minggu)</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($users as $user)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold truncate">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm truncate">
                                    {{ $user->name }}
                                </td>
                                <td class="px-4 py-3 text-sm truncate">
                                    {{ $user->puskesmas }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $user->address }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $user->age_pregnancy ? $user->age_pregnancy->pregnancy_start : 'unset' }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $user->age_pregnancy ? $user->getAgePregnancy() : 'unset' }}
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            </div>
        </div>
    </div>
</x-app-layout>
