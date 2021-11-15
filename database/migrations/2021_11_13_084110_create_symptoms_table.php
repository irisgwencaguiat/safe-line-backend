<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSymptomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("symptoms", function (Blueprint $table) {
            $table->string("id");
            $table->primary("id");
            $table->timestamps();
            $table->string("type");
            $table->string("name");
            $table->string("common_name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("symptoms");
    }
}
