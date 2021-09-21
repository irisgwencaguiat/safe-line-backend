<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("clinic_files", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->integer("clinic_id")->unsigned();
            $table
                ->foreign("clinic_id")
                ->references("id")
                ->on("clinics");
            $table->string("file_url");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("clinic_files");
    }
}
