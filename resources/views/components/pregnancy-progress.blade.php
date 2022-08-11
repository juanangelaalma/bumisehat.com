<style>
    @keyframes widthScale {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(0);
        }
    }

    .progress_animate {
        animation: 1s ease-in-out 0s 1 widthScale;
    }
</style>

<div class="md:px-10 flex flex-row space-x-1 md:space-x-6 shadow-md px-3 py-4 rounded-lg border border-gray-100">
    <div class="flex flex-col justify-start items-center">
        <span class="text-user-sm md:text-base text-dark">Minggu</span>
        <h6 class="text-dark font-bold text-lg md:text-user-md">{{ $age }}</h6>
    </div>

    <div class="flex flex-row w-full items-center">
        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 overflow-hidden">
            <div class="bg-primary-index h-2.5 rounded-full progress_animate" style="width: {{ ($age / env('MAX_PREGNANCY_AGE', 42)) * 100 }}%;">
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center">
        <span class="text-user-sm md:text-base text-dark">Sisa</span>
        <h6 class="text-dark font-bold text-lg md:text-user-md">{{ 42 - $age }}</h6>
        <span class="text-user-sm md:text-base text-dark">Minggu</span>
    </div>

</div>
