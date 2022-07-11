<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePregnancyStartToNotNullableInAgePregnanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('age_pregnancies', function (Blueprint $table) {
            $table->date('pregnancy_start')->nullable(false)->change();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('age_pregnancies', function (Blueprint $table) {
            $table->date('pregnancy_start')->nullable()->change();
        });
    }
}
