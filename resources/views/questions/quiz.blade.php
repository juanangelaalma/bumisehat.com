@extends('layouts.user', ['active' => 'quiz'])

@section('content')
    <div class="bg-white py-14">
        <x-title-header-user title="Quiz" line={{ true }}
            desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ipsa molestiae in quia, ad distinctio ipsam enim nisi sapiente architecto.">
        </x-title-header-user>


        <div class="px-3 md:px-24 py-5 flex flex-col">
            <div class="ml-7 mr-2 mt-4 md:px-16">
                @if ($isAlreadyFilledOutQuiz)
                    <div>Anda telah mengisi quiz</div>
                @else
                <form action="/quiz/submit" method="POST">
                  @csrf
                  <ol class="relative px-6 border-l border-gray-200 dark:border-gray-700">
                      @php
                          $no = 1;
                      @endphp
                      @foreach ($questions as $question)
                          <li class="mb-10 ml-4 space-y-3">
                              <div
                                  class="absolute w-[55px] h-[55px] flex justify-center items-center bg-[#ffb991] rounded-full -left-7 border border-white">
                                  <span class="font-bold text-primary-index text-xl">{{ $no }}</span>
                              </div>
                              <div class="flex items-center">
                                  <h3
                                      class="text-[20px] leading-7 md:text-user-lg md:leading-10 font-semibold text-dark mt-0 md:mt-2">
                                      {{ $question->question }}</h3>
                              </div>
                              <ul
                                  class="grid grid-cols-2 md:grid-cols-3 gap-x-5 gap-y-3 m-10 max-w-xl mr-0 ml-auto pt-2 md:pt-10">
                                  @foreach ($question->offered_answers as $offered)
                                      <li class="relative">
                                          <input class="sr-only peer" type="radio"
                                              value="{{ "$offered->id" }}" name="answer[{{ $question->id }}]"
                                              id="{{ $offered->id }}">
                                          <label
                                              class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-primary-index peer-checked:text-primary-index transition-colors duration-300 peer-checked:ring-2 peer-checked:border-transparent"
                                              for="{{ $offered->id }}">{{ $offered->answer }}</label>
                                      </li>
                                  @endforeach
                              </ul>
                          </li>
                          @php
                              $no++;
                          @endphp
                      @endforeach
                  </ol>
                  <div class="flex justify-end">
                    <x-button-user class="w-full md:w-1/3" type="submit">Submit</x-button-user>
                  </div>
              </form>
                @endif
            </div>
        </div>

    </div>
@endsection

{{-- contoh --}}
{{-- https://dev.to/thomasvanholder/click-label-to-choose-radio-button-tailwindcsss-peer-class-39nb --}}
