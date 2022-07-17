<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PregnancyAlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=42; $i++) {
            DB::table('pregnancy_alerts')->insert([
                'title'    => "Minggu  $i",
                'content'  => Str::random(100),
                'weeks'    => $i
            ]);
        }
    }
}
