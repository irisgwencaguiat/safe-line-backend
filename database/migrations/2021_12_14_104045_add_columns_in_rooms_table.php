<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("rooms", function (Blueprint $table) {
            $table->string("recommended_specialist")->nullable();
            $table->string("recommended_channel")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("rooms", function (Blueprint $table) {
            $table->dropColumn("recommended_specialist");
            $table->dropColumn("recommended_channel");
        });
    }
}
