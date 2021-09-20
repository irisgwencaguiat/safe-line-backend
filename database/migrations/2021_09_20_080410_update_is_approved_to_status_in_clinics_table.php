<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateIsApprovedToStatusInClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("clinics", function (Blueprint $table) {
            $table->dropColumn("is_approved");
            $table->string("status")->default("pending");
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
            $table->boolean("is_approved")->default(false);
            $table->dropColumn("status");
        });
    }
}
