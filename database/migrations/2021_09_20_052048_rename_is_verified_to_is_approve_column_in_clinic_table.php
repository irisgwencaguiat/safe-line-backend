<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameIsVerifiedToIsApproveColumnInClinicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("clinics", function (Blueprint $table) {
            $table->renameColumn("is_verified", "is_approved");
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
            $table->renameColumn("is_approved", "is_verified");
        });
    }
}
