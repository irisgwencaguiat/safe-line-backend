<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("chats", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string("message");
            $table->string("sender_type");
            $table
                ->integer("user_id")
                ->unsigned()
                ->nullable();
            $table
                ->foreign("user_id")
                ->references("id")
                ->on("users");

            $table
                ->integer("room_id")
                ->unsigned()
                ->unsigned()
                ->nullable();
            $table
                ->foreign("room_id")
                ->references("id")
                ->on("rooms");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("chats");
    }
}
