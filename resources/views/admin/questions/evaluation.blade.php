<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between nowrap w-full">
            {{ __('Jawaban Evaluasi') }}
        </div>
    </x-slot>
    <div class="container grid">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                @include('admin.questions.partials.table', [
                    'users' => $users,
                    'routeShow' => 'admin.evaluation.show',
                ])
            </div>
        </div>
        <div
            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>
