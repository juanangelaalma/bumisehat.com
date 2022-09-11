<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="flex flex-wrap mb-4">
        <div class="w-full max-h-[126] md:max-h-auto md:w-3/5 pb-4 md:pr-2 md:pb-0">
            <div class="bg-white p-4 flex flex-wrap md:flex-nowrap rounded-lg shadow-sm">
                <div class="w-full md:w-3/4 pr-4 md:pr-2">
                    <h6 class="inline-block text-lg text-primary-index mb-2">Selamat datang <span
                            class="font-semibold">Admin 🎉</span> </h6>
                    <p class="text-dark-gray text-sm leadin-10"><span class="font-semibold text-dark">Tetap
                            semangat!!.</span> Masa depan adalah milik Anda yang telah menyiapkannya dari hari ini</p>
                </div>
                <div class="w-full md:w-1/4 flex justify-end p-6 md:p-0">
                    <img src="{{ asset('images/register.png') }}" class="w-auto h-full md:h-[150px] lg-[100px]"
                        alt="">
                </div>
            </div>
        </div>
        <div class="w-1/2 md:w-1/5 px-2">
            <div
                class="bg-white text-blue-500 flex flex-col justify-center items-center h-40 w-full md:h-full md:w-full rounded-lg shadow-sm">
                <div class="h-10 w-10 bg-blue-100 rounded-lg text-blue-500 p-2 shadow-md">
                    <img src="{{ asset('images/akun_blue.png') }}" alt="">
                </div>
                <h2 class="font-semibold text-[3.2rem]  leading-[70px]">{{ $usersCount }}</h2>
                <span class="text-sm font-medium">User aktif</span>
            </div>
        </div>
        <div class="w-1/2 md:w-1/5 px-2">
            <div
                class="bg-white text-green-500 flex flex-col justify-center items-center h-40 w-full md:h-full md:w-full rounded-lg shadow-sm">
                <div class="h-10 w-10 bg-green-100 rounded-lg text-green-500 p-2 shadow-md">
                    <img src="{{ asset('images/materi_green.png') }}" alt="">
                </div>
                <h2 class="font-semibold text-[3.2rem] leading-[70px]">{{ $articlesCount }}</h2>
                <span class="text-sm font-medium">Materi</span>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="w-full max-h-[126] md:max-h-auto md:w-full pb-4 mb-4 md:pr-2 md:pb-0">
            <div class="bg-white p-4 flex flex-col md:flex-nowrap rounded-lg shadow-sm">
                <h2 class="text-md font-semibold text-dark w-full mb-3">Kusioner</h2>
                <hr class="mb-3">
                <div class="w-full flex space-y-6 md:space-y-0 flex-col md:flex-row">
                    <div class="w-full md:w-1/2 flex flex-col space-y-4">
                        <h3 class="font-semibold text-sm text-center">Jawaban Quiz Keseluruhan User</h3>
                        <div id="quizChart"></div>
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col space-y-4">
                        <h3 class="font-semibold text-sm text-center">Jawaban Evaluasi Keseluruhan User</h3>
                        <div id="evalChart"></div>
                    </div>
                    <div class="w-full md:w-1/5 px-2">
                        <div
                            class="text-blue-500 flex flex-col justify-center items-center h-40 w-full md:h-full md:w-full rounded-lg shadow-sm py-6 md:py-0">
                            <div class="h-10 w-10 bg-blue-100 rounded-lg text-blue-500 p-2 shadow-md">
                                <img src="{{ asset('images/quiz_blue.png') }}" alt="">
                            </div>
                            <h2 class="font-semibold text-[3.2rem]  leading-[70px]">{{ $questionsCount }}</h2>
                            <span class="text-sm font-medium">Total pertanyaan</span>
                            <ul class="text-xs text-left text-dark md:mt-4 font-semibold">
                                <li>Pertanyaan abcd: {{ $abcdCount }}, 1234: {{ $numberQuestionCount }}, Agreeement: {{ $agreementCount }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="w-full pb-4 mb-4 md:pr-2 md:pb-0">
            <div class="bg-white p-4 flex w-full flex-col md:flex-nowrap rounded-lg shadow-sm">
                <h2 class="text-md font-semibold text-dark w-full mb-3">User Gabung</h2>
                <hr class="mb-3">
                <div class="w-full flex flex-row flex-wrap h-auto">
                    <div class="w-full md:w-2/3 h-[300px] md:h-[400px]">
                        <div id="userChart"></div>
                    </div>
                    <div class="w-full md:w-1/3">
                        <h5 class="text-sm font-semibold text-dark mb-3 ml-2">User terbaru</h5>
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr
                                    class="text-user-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">Nama</th>
                                    <th class="px-4 py-3">Usia kehamilan</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                @foreach ($users as $user)
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold truncate">{{ $user->name }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm truncate text-center">
                                            {{ $user->age_pregnancy ? (get_age_of_pregnancy($user->age_pregnancy->pregnancy_start) <= env('MAX_PREGNANCY_AGE', 42) ? get_age_of_pregnancy($user->age_pregnancy->pregnancy_start) : 'Telah usai') : '-' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const month = {{ json_encode($userJoin) }}
        var pieOptions = {
            chart: {
                type: 'pie',
                height: '300px',
                width: '100%'
            },
            labels: ['Salah', 'Benar'],
            colors: ['#FF1752', '#0086FF'],
            legend: {
                position: 'bottom'
            }
        }

        const barOptions = {
            chart: {
                type: 'bar',
                height: '100%'
            },
            bar: {
                columnWidth: '90%',
            },
            series: [{
                data: month
            }],
            plotOptions: {
                bar: {
                    distributed: true,
                    columnWidth: '50%'
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                custom: function({
                    series,
                    seriesIndex,
                    dataPointIndex,
                }) {
                    return '<div class="px-3 py-2">' + '<span>' + series[seriesIndex][dataPointIndex] +
                        ' user join</span>' +
                        '</div>';
                }
            },
            xaxis: {
                categories: [
                    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'Nopember',
                    'Desember',
                ]
            },
        }

        const quizChartOption = {
            ...pieOptions,
            series: [{{ $quizAnswer['false'] }}, {{ $quizAnswer['true'] }}]
        }

        const evalChartOption = {
            ...pieOptions,
            series: [{{ $evalAnswer['false'] }}, {{ $evalAnswer['true'] }}]
        }

        var chartQuiz = new ApexCharts(document.querySelector("#quizChart"), quizChartOption);
        var chartEval = new ApexCharts(document.querySelector("#evalChart"), evalChartOption);
        var chartUser = new ApexCharts(document.querySelector("#userChart"), barOptions);

        chartUser.render();
        chartQuiz.render();
        chartEval.render();
    </script>

</x-app-layout>
