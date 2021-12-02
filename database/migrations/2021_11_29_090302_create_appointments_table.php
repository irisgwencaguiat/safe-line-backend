<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("appointments", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string("type");
            $table->text("zoom_link")->nullable();
            $table->time("appointment_time");
            $table->timestamp("appointment_date");
            $table->integer("clinic_id")->unsigned();
            $table
                ->foreign("clinic_id")
                ->references("id")
                ->on("clinics");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("appointments");
    }
}
