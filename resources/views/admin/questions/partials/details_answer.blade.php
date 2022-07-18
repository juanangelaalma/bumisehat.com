<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between nowrap w-full">
            {{ __("Jawaban $title") }}
        </div>
    </x-slot>
    <div class="container grid">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <div class="flex flex-col px-4 py-3 mb-8 bg-white rounded-lg shadow-md space-y-2">
                    <div class="flex flex-wrap">
                        <div class="w-full self-start md:w-1/2 flex flex-wrap">
                            <h4 class="w-full text-dark text-md font-semibold mb-3">User detail</h4>
                            <label class="block text-sm w-full md:w-1/2 mb-4">
                                <span class="text-dark font-semibold mb-1">
                                    Nama
                                </span>
                                <p class="text-md font-dark">{{ $user->name }}</p>
                            </label>
                            <label class="block text-sm w-full md:w-1/2 mb-4">
                                <span class="text-dark font-semibold mb-1">
                                    Email
                                </span>
                                <p class="text-md font-dark">{{ $user->email }}</p>
                            </label>
                            <label class="block text-sm w-full md:w-1/2 mb-4">
                                <span class="text-dark font-semibold mb-1">
                                    Puskesmas
                                </span>
                                <p class="text-md font-dark">{{ $user->puskesmas }}</p>
                            </label>
                            <label class="block text-sm w-full md:w-1/2 mb-4">
                                <span class="text-dark font-semibold mb-1">
                                    Alamat
                                </span>
                                <p class="text-md font-dark">{{ $user->address }}</p>
                            </label>
                            <label class="block text-sm w-full md:w-1/2 mb-4">
                                <span class="text-dark block font-semibold mb-4">
                                    Poin
                                </span>
                                <span
                                    class="bg-red-100 text-red-800 text-lg font-medium mr-2 px-4 py-2 rounded dark:bg-red-200 dark:text-red-900">{{ $true_point }}/{{ $total_point }}</span>
                            </label>
                        </div>
                        <div class="w-full md:w-1/2">
                            <h4 class="w-full text-dark text-md font-semibold mb-3">Hasil quiz</h4>
                            <div class="w-full h-auto flex justify-center">
                                <x-pie-chart-answer :falseAnswer=$false_answer :trueAnswer=$true_answer></x-pie-chart-answer>
                            </div>
                        </div>
                    </div>
                    <div class="block pt-6 overflow-auto">
                        <table class="w-full table-auto whitespace-no-wrap">
                            <thead>
                                <tr
                                    class="text-user-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-2 py-3">No</th>
                                    <th class="px-4 py-3">Pertanyaan</th>
                                    <th class="px-4 py-3">Jawaban</th>
                                    <th class="px-4 py-3">Jawaban benar</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Poin</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                @php
                                    $no = 1
                                @endphp
                                @foreach ($answers as $answer)
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-2 py-3">
                                            <div class="flex items-center text-sm">
                                                <p class="font-semibold truncate">{{ $no }}</p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm min-w-[300px] md:max-w-2xl">
                                            <p class="font-semibold w-full">{{ $answer->question->question }}</p>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <p class="font-normal truncate">{{ $answer->offered_answer->answer }}</p>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <p class="font-normal truncate">
                                                {{ $answer->question->true_answer ? $answer->question->correct_answer->answer : '' }}
                                            </p>
                                        </td>
                                        <td class="px-4 py-3 text-sm truncate">
                                            @if ($answer->question->true_answer && $answer->offered_answer_id !== $answer->question->true_answer)
                                                <span class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Salah</span>
                                            @else
                                                <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Benar</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3 text-sm truncate">
                                            <p class="font-normal truncate">{{ $answer->question->point }}</p>
                                        </td>
                                    </tr>
                                    @php
                                        $no++
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
