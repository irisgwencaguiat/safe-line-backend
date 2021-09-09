<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("clinics", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string("name");
            $table->timestamp("opening_time");
            $table->timestamp("closing_time");
            $table->integer("clinic_service_id")->unsigned();
            $table
                ->foreign("clinic_service_id")
                ->references("id")
                ->on("clinic_services");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("clinics");
    }
}
