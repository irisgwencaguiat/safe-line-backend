<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultImageToProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("profiles", function (Blueprint $table) {
            $table
                ->string("image_url")
                ->default(
                    "https://res.cloudinary.com/gwencaguiat/image/upload/v1631944297/safe-line/profile/user-placeholder.b15acc02_u3g9sn.png"
                )
                ->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("profiles", function (Blueprint $table) {
            $table
                ->string("image_url")
                ->nullable()
                ->change();
        });
    }
}
