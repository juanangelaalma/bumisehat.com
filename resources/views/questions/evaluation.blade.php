@extends('layouts.user', ['active' => 'evaluation'])

@section('content')
    <div class="bg-white py-14">
        <x-title-header-user title="Evaluasi" line={{ true }}
            desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ipsa molestiae in quia, ad distinctio ipsam enim nisi sapiente architecto.">
        </x-title-header-user>


        <div class="px-3 md:px-24 py-5 flex flex-col">
            <div class="ml-7 mr-2 mt-4 md:px-16">
              @if ($isAlreadyFilledOutEvaluation)
              <h1 class="text-center text-lg text-dark font-bold mb-7">Hasil Evaluasi Anda</h1>
              <div class="flex flex-col md:flex-row items-center justify-center space-y-8 md:space-x-10">
                  <div class="bg-primary-dark bg-opacity-70 self-center p-8 md:p-10 rounded-lg">
                      <h6 class="text-user-xl md:tex-user-xl text-white">{{ $true_point }}/{{ $true_point + $false_point }}</h6>
                  </div>
                  {{-- <div class="w-full md:w-1/2">
                      <x-pie-chart-answer :falseAnswer=$false_answer :trueAnswer=$true_answer></x-pie-chart-answer>
                  </div> --}}
              </div>
              @else  
                  <x-form-questions route="evaluation.submit" :questions=$questions></x-form-questions>
              @endif
            </div>
        </div>

    </div>
@endsection

{{-- contoh --}}
{{-- https://dev.to/thomasvanholder/click-label-to-choose-radio-button-tailwindcsss-peer-class-39nb --}}
