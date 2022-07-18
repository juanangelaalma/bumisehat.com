<x-app-layout>
  <x-slot name="header">
      <div class="flex items-center justify-between nowrap w-full">
          {{ __('Jawaban Evaluasi') }}
      </div>
  </x-slot>
  <div class="container grid">
      <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
          <div class="w-full overflow-x-auto">
            @include('admin.questions.partials.table', ['users' => $users, 'routeShow' => 'admin.evaluation.show'])
          </div>
      </div>
      </main>
</x-app-layout>
