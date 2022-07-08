@extends('layouts.user', ['active' => 'quiz'])

@section('content')
<div class="bg-white py-14">
  <x-title-header-user title="Quiz" line={{ true }}
      desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ipsa molestiae in quia, ad distinctio ipsam enim nisi sapiente architecto.">
  </x-title-header-user>


  <div class="px-2 md:px-24 py-5 flex flex-col">
      <div class="ml-7 mr-2 mt-4 md:px-16">
          <ol class="relative px-6 border-l border-gray-200 dark:border-gray-700">
              <li class="mb-10 ml-4 space-y-3">
                  <div
                      class="absolute w-[55px] h-[55px] flex justify-center items-center bg-[#ffb991] rounded-full -left-7 border border-white">
                      <span class="font-bold text-primary-index text-xl">1</span>
                  </div>
                  <div class="flex items-center">
                    <h3 class="text-[20px] leading-7 md:text-user-lg md:leading-10 font-semibold text-dark mt-0 md:mt-2">Siapa nama presiden pertama Indonesia?</h3>
                  </div>
                  <ul class="grid grid-cols-2 md:grid-cols-3 gap-x-5 gap-y-3 m-10 max-w-xl mr-0 ml-auto pt-2 md:pt-10">
                    <li class="relative">
                      <input class="sr-only peer" type="radio" value="yes" name="answer" id="answer_yes">
                      <label class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-primary-index peer-checked:text-primary-index transition-colors duration-300 peer-checked:ring-2 peer-checked:border-transparent" for="answer_yes">Yes</label>
                    </li>
                    <li class="relative">
                      <input class="sr-only peer" type="radio" value="no" name="answer" id="answer_no">
                      <label class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-primary-index peer-checked:text-primary-index transition-colors duration-300 peer-checked:ring-2 peer-checked:border-transparent" for="answer_no">No</label>
                     </li>
                  
                    <li class="relative">
                      <input class="sr-only peer" type="radio" value="maybe" name="answer" id="answer_maybe">
                      <label class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-primary-index peer-checked:text-primary-index transition-colors duration-300 peer-checked:ring-2 peer-checked:border-transparent" for="answer_maybe">Juan Angela Alma</label>
                    </li>
                  </ul>
              </li>
          </ol>
      </div>
  </div>

</div>
@endsection

{{-- contoh --}}
{{-- https://dev.to/thomasvanholder/click-label-to-choose-radio-button-tailwindcsss-peer-class-39nb --}}