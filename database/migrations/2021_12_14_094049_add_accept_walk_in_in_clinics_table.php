<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAcceptWalkInInClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("clinics", function (Blueprint $table) {
            $table->boolean("accept_walk_in")->default(false);
            $table->boolean("accept_covid_patient")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("clinics", function (Blueprint $table) {
            $table->dropColumn("accept_walk_in");
            $table->dropColumn("accept_covid_patient");
        });
    }
}
