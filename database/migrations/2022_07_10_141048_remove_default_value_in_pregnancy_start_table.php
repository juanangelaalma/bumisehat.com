<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class RemoveDefaultValueInPregnancyStartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('age_pregnancies', function (Blueprint $table) {
            $table->date('pregnancy_start')->default(NULL)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pregnancy_start', function (Blueprint $table) {
            $table->date('pregnancy_start')->default(Carbon::now())->change();
        });
    }
}
