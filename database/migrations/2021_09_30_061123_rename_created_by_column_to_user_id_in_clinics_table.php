<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCreatedByColumnToUserIdInClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("clinics", function (Blueprint $table) {
            $table->dropForeign(["created_by"]);
            $table->renameColumn("created_by", "user_id");
            $table
                ->foreign("user_id")
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
        Schema::table("user_id_in_clinics", function (Blueprint $table) {
            $table->dropForeign(["user_id"]);
            $table->renameColumn("user_id", "created_by");

            $table
                ->foreign("created_by")
                ->references("id")
                ->on("users");
        });
    }
}
