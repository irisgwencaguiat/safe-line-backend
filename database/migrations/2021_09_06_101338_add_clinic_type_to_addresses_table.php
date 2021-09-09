<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClinicTypeToAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("addresses", function (Blueprint $table) {
            $table->string("type");
            $table
                ->integer("clinic_id")
                ->unsigned()
                ->nullable();
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
        Schema::table("addresses", function (Blueprint $table) {
            //
        });
    }
}
