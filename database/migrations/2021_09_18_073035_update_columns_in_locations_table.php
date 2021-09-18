<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnsInLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("locations", function (Blueprint $table) {
            $table->dropColumn("street");
            $table->dropColumn("region");
            $table->dropColumn("city");
            $table->dropColumn("zip_code");
            $table->string("address");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("locations", function (Blueprint $table) {
            $table->string("street");
            $table->string("region");
            $table->string("city");
            $table->string("zip_code");
            $table->dropColumn("address");
        });
    }
}
