<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedByColumnInClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("clinics", function (Blueprint $table) {
            $table->integer("created_by")->unsigned();
            $table
                ->foreign("created_by")
                ->references("id")
                ->on("users");
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
            $table->dropForeign(["created_by"]);
            $table->dropColumn("created_by");
        });
    }
}
