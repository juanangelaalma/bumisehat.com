<?php

namespace Database\Seeders;

use App\Models\OfferedAnswer;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'Siapa nama presiden indonesia',
                'type' => 'abcd',
                'offered_answers' => ['Jokowi', 'Prabowo', 'Tukul', 'Ayu'],
                'true_answer' => 'Jokowi'
            ],
            [
                'question' => 'Kapan Indonesia merdeka?',
                'type' => 'abcd',
                'offered_answers' => ['14 Agustus 1945', '15 Agustus 1945', '19 Agustus 1946', '17 Agustus 1945'],
                'true_answer' => '17 Agustus 1945'
            ],
            [
                'question' => 'Lama permainan sepakbola adalah...',
                'type' => 'abcd',
                'offered_answers' => ['sampai maghrib', '90 menit', '1 jam 30 menit', '5 menit'],
                'true_answer' => 'sampai maghrib'
            ],
            [
                'question' => 'Kalau ada bus kecelakaan, pesawat jatuh, ada kapal tenggelam, semuanya akan muncul dimana?',
                'type' => 'abcd',
                'offered_answers' => ['TV', 'Radio', 'Berita', 'Buku'],
                'true_answer' => 'TV'
            ],
            [
                'question' => 'Aku selalu ada di atas presiden dan menteri, tapi aku tidak punya jabatan apapun dalam pemerintahan. Siapakah aku?',
                'type' => 'abcd',
                'offered_answers' => ['Sepatu', 'Atap', 'Peci', 'Sepeda motor'],
                'true_answer' => 'Peci'
            ],
            [
                'question' => 'Seberapa puaskah anda dengan layanan kami? 1-4',
                'type' => '1234',
                'offered_answers' => ['1', '2', '3', '4'],
                'true_answer' => ''
            ]
        ];

        foreach ($questions as $qs) {
            $newQuestion = DB::table('questions')->insertGetId(['question' => $qs['question'], 'point' => 10, 'type' => $qs['type'], 'created_at' => now()]);
            foreach ($qs['offered_answers'] as $answer) {
                DB::table('offered_answers')->insert(['answer' => $answer, 'question_id' => $newQuestion]);
            }
            if($qs['true_answer']) {
                $trueAnswer = OfferedAnswer::where(['question_id' => $newQuestion, 'answer' => $qs['true_answer']])->first()->id;
                DB::table('questions')->where('id', $newQuestion)->update(['true_answer' => $trueAnswer]);
            }
        }
    }
}
