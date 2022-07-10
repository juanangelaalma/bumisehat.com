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
                <x-form-questions route="quiz.submit" :questions=$questions></x-form-questions>
                @endif
            </div>
        </div>

    </div>
@endsection

{{-- contoh --}}
{{-- https://dev.to/thomasvanholder/click-label-to-choose-radio-button-tailwindcsss-peer-class-39nb --}}
