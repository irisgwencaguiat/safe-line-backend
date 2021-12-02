<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("appointment_members", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string("type");
            $table->integer("user_id")->unsigned();
            $table
                ->foreign("user_id")
                ->references("id")
                ->on("users");
            $table->integer("appointment_id")->unsigned();
            $table
                ->foreign("appointment_id")
                ->references("id")
                ->on("appointments");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("appointment_members");
    }
}
