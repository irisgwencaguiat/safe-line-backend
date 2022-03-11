<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHasTestingCenterInClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clinics', function (Blueprint $table) {
            $table->boolean("has_testing_center")->default("false");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clinics', function (Blueprint $table) {
            $table->dropColumn("has_testing_center");
        });
    }
}
