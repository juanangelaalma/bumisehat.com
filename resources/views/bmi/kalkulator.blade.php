@extends('layouts.user', ['active' => 'kalkulator-bmi'])

@section('content')
    <div class="bg-white py-14">
        <x-title-header-user title="Kalkulator BMI"
            desc="Body Mass Index (BMI) atau Indeks Massa Tubuh (IMT) adalah angka yang menjadi penilaian standar untuk menentukan apakah berat badan Anda tergolong normal, kurang, berlebih, atau obesitas."
            line={{ false }}></x-title-header-user>
        <div class="px-2 md:px-24 py-5">
            <div class="w-full lg:px-12">
                <div class="flex flex-col space-y-10 lg:flex-row lg:space-y-0 lg:space-x-3">

                    <form class="w-full lg:w-2/5" id="bmiForm">
                        <div class="flex flex-row justify-center">
                            <div class="flex flex-col justify-center items-center">
                                <div
                                    class="w-[80px] bg-white rounded-full mb-4 h-[80px] overflow-hidden object-cover object-center shadow-md">
                                    <img src="/images/female.svg" class="w-full h-full" alt="">
                                </div>
                                <span>Perempuan</span>
                            </div>
                        </div>
                        <!-- Input[ype="email"] -->
                        <div class="mt-4">
                            <x-label-user :value="__('Tinggi(cm)')" />
                            <x-input-user type="number" id="tall" name="tall" class="block w-full" required
                                autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label-user for="weight" :value="__('Berat(kg)')" />
                            <x-input-user type="number" id="weight" name="weight" class="block w-full" />
                        </div>

                        <div class="mt-8">
                            <x-button-user id="btnCalculate" class="block w-full mb-1">
                                {{ __('HITUNG') }}
                            </x-button-user>
                        </div>
                    </form>

                    <div class="w-full lg:3/5 flex items-center flex-col space-y-3 opacity-0 transition-opacity duration-300" id="contentValue">
                        <h6 class="w-full text-base text-dark font-semibold text-center">BMI anda</h6>
                        <h2 class="text-user-header font-semibold text-dark text-red-500" id="bmiValueAndCategory">36.5,
                            Obesitas</h2>
                        <div class="flex flex-row justify-center items-center space-x-3">
                            <p>Tinggi(cm) <span class="text-dark font-semibold" id="tallValue">170</span></p>
                            <p>Berat(kg) <span class="text-dark font-semibold" id="weightValue">17</span></p>
                        </div>

                        <div class="w-[80%] h-[30px] relative">
                            <div class="w-full flex flex-row rounded-lg overflow-hidden">
                                <div class="w-[30%] h-[15px] bg-red-500"></div>
                                <div class="w-[15%] h-[15px] bg-green-500"></div>
                                <div class="w-[20%] h-[15px] bg-yellow-400"></div>
                                <div class="w-[35%] h-[15px] bg-red-500"></div>
                            </div>
                            <div id="range" class="absolute left-0 flex flex-row">
                                <div
                                    class="w-[40px] mt-3 rounded-lg h-[30px] bg-black text-white flex justify-center items-center relative">
                                    <span class="text-xs" id="bmiValue">36.4</span>
                                    <div class="mini-triangle absolute -top-2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="w-[90%] lg:w-[80%] pt-14" id="description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const bmiForm = document.getElementById('bmiForm')
        const tallInput = document.getElementById('tall')
        const weightInput = document.getElementById('weight')
        function showContentValue() {
          const contentValue = document.getElementById('contentValue')
          contentValue.style.opacity = '100%'
        }
        bmiForm.addEventListener('submit', function(e) {
            e.preventDefault()
            const tallValue = tallInput.value
            const weightValue = weightInput.value

            const tallValueOnMeter = tallValue / 100
            const bmiValue = weightValue / (tallValueOnMeter * tallValueOnMeter)
            const bmiValueAfterFixed = Math.round(bmiValue * 10) / 10;
            showContentValue()
            setBmiValueAndCategory(bmiValueAfterFixed)
            setTallAndWeightValue(tallValue, weightValue)
            setRange(bmiValueAfterFixed)
            setDescription(bmiValueAfterFixed)
        })

        function setTallAndWeightValue(tallValue, weightValue) {
            const tallValueElement = document.getElementById('tallValue')
            const weightValueElement = document.getElementById('weightValue')
            tallValueElement.textContent = tallValue
            weightValueElement.textContent = weightValue
        }

        function setBmiValueAndCategory(bmiValue) {
            const bmiValueAndCategory = document.getElementById('bmiValueAndCategory')
            const colors = {
                underweight: '#F05252',
                normal: '#0E9F6E',
                overweight: '#E3A008',
                obesity: '#F05252'
            }
            let category = ''
            if (bmiValue <= 18.5) {
                bmiValueAndCategory.style.color = colors.underweight
                category = 'Kurus'
            } else if (bmiValue <= 25.0) {
                bmiValueAndCategory.style.color = colors.normal
                category = 'Normal'
            } else if (bmiValue <= 27.0) {
                bmiValueAndCategory.style.color = colors.overweight
                category = 'Gemuk'
            } else {
                bmiValueAndCategory.style.color = colors.obesity
                category = 'Obesitas'
            }
            bmiValueAndCategory.textContent = `${bmiValue}, (${category})`
        }

        function setRange(bmiValue) {
            const range = document.getElementById('range')
            console.log(range)
            const bmiValueEl = range.querySelector('#bmiValue')
            let leftPosition = 0;
            if (bmiValue <= 5) {
                range.style.left = `-5%`
            } else if (bmiValue <= 18.5) {
                leftPosition = bmiValue * 1.621 - 8
            } else if (bmiValue <= 25.0) {
                leftPosition = bmiValue * 1.80 - 8
            } else if (bmiValue <= 27.0) {
                leftPosition = bmiValue * 2.40 - 8
            } else {
                leftPosition = (((bmiValue - 27) * 2.5) + 65)
            }
            bmiValueEl.textContent = bmiValue
            range.style.left = `${leftPosition > 92 ? 92 : leftPosition}%`
        }

        function setDescription(bmiValue) {
            let description = ''
            if (bmiValue <= 18.5) {
                description =
                    "Anda dapat dikatakan memiliki berat badan kurang atau underweight karena angka BMI Anda kurangdari angka 18,5. Berat badan kurang bukanlah kondisi yang sehat.<br><br>Kondisi ini dapat meningkatkan risiko Anda untuk mengalami beberapa masalah kesehatan, sepertisistem kekebalan tubuh lemah, tulang menjadi rapuh, sulit memperoleh keturunan atauinfertilitas, hingga kurang gizi.<br><br>Kami merekomendasikan anda untuk menaikkan berat badan Anda hingga 65 Kg.<br><br>Untuk meningkatkan berat badan agar lebih ideal, Anda perlu menyiasatinya dengan pola makansehat yang terdiri dari makanan dengan kandungan nutrisi lengkap, seperti karbohidrat, protein,lemak sehat, serta aneka vitamin dan mineral.<br><br>Anda bisa memenuhi asupan nutrisi tersebut dengan mengonsumsi nasi, buah, sayuran, ikan, telur,kacang-kacangan, dan susu."
            } else if (bmiValue <= 25.0) {
                description =
                    "Nilai BMI Anda termasuk pada rentang angka yang disebut berat badan normal atau ideal. Namun, memiliki berat badan ideal bukan berarti Anda bebas melakukan apa pun. <br> <br> Anda tetap dianjurkan untuk menjaga berat badan dan kesehatan tubuh secara keseluruhan dengan mengonsumsi makanan bernutrisi, mencukupi waktu istirahat, melakukan olahraga secara rutin, serta menghindari kebiasaan buruk, seperti merokok atau mengonsumsi minuman beralkohol."
            } else if (bmiValue <= 27.0) {
                description =
                    "Bila hasil perhitungan BMI Anda menunjukkan nilai antara 25,1 â€“ 27,0, berarti Anda memiliki berat badan berlebih atau overweight. <br> <br> Kondisi ini juga tidak baik bagi kesehatan karena dapat meningkatkan risiko berbagai penyakit, seperti stroke, diabetes tipe 2, osteoarthritis, dan hipertensi. Sebagai upaya pencegahan, Anda disarankan mengambil langkah untuk mengurangi berat badan. <br> <br> Hal ini bisa dilakukan dengan cara mengurangi asupan makanan yang mengandung gula atau karbohidrat dan kolesterol. Kedua jenis makanan tersebut dapat menyebabkan tubuh menghasilkan banyak jaringan lemak yang dapat memicu peningkatan berat badan. <br> <br> Kami merekomendasikan anda untuk menurunkan berat badan Anda hingga 65 Kg. <br> <br> Untuk menurunkan berat badan, cobalah mulai memperbanyak asupan protein, seperti ikan, telur, tahu, dan tempe, buah dan sayur, serta dianjurkan untuk minum air 30 menit sebelum makan agar Anda merasa lebih cepat kenyang. Jangan lupa juga untuk rutin berolahraga minimal 20â€“30 menit setiap hari atau minimal 3 kali seminggu."
            } else {
                description =
                    "Jika hasil perhitungan BMI Anda menunjukkan angka di atas 27, berarti Anda sudah mengalamiobesitas. <br> <br> Obesitas adalah kondisi ketika Anda memiliki jumlah lemak yang berlebih di dalam tubuh. Kondisi ini tidak baik untuk kesehatan karena dapat meningkatkan risiko penyakit jantung, diabetes, stroke, dan tekanan darah tinggi. <br> <br> Kami merekomendasikan anda untuk menurunkan berat badan Anda hingga 67 Kg. <br> <br> Untuk mengatasinya, Anda disarankan untuk mengurangi jumlah kalori yang masuk ke dalam tubuh dengan mengonsumsi makanan yang lebih sehat, seperti sayuran dan buah-buahan, serta berolahraga secara rutin. <br> Jika perlu, Anda bisa berkonsultasi dengan dokter untuk memulai program pengurangan berat badan untuk memperoleh berat badan ideal."
            }
            const descElement = document.getElementById('description')
            descElement.innerHTML = description
        }
    </script>
@endsection
