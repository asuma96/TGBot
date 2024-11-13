<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(false)->comment('User id');
            $table->integer('tg_chat_id') ->nullable(false)->comment('TG chat id');
            $table->string('message', 2047)->nullable()->comment('Text');
            $table->integer('message_id')->nullable()->comment('message_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
