<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("addresses", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string("street");
            $table->string("region");
            $table->string("city");
            $table->string("zip_code");
            $table->integer("profile_id")->unsigned();
            $table
                ->foreign("profile_id")
                ->references("id")
                ->on("profiles");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("addresses");
    }
}
