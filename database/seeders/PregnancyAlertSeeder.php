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
                'content'  => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam pariatur quisquam libero corporis autem sed nam, ipsum illo quaerat aliquid velit, culpa placeat porro? Doloremque nesciunt reprehenderit error molestiae quaerat, placeat quae! Ea illum itaque, placeat cumque beatae distinctio minus dignissimos accusamus, qui, autem alias. Itaque commodi tenetur a, corporis sunt dolores ad? Est provident explicabo aut doloremque quisquam, at quos vero. Illo, repellat molestiae adipisci quos minima magnam, cupiditate id laborum pariatur repudiandae aspernatur nobis ipsum quod, consectetur obcaecati natus. Provident aut magni reiciendis maiores dolorum quis qui distinctio dolorem eaque aperiam reprehenderit, ullam corporis nisi iure? Mollitia, sit.',
                'weeks'    => $i
            ]);
        }
    }
}
