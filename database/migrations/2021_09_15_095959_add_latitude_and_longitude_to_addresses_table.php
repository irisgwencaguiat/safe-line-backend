<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLatitudeAndLongitudeToAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("addresses", function (Blueprint $table) {
            $table->double("latitude");
            $table->double("longitude");
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
            $table->dropColumn("latitude");
            $table->dropColumn("longitude");
        });
    }
}
