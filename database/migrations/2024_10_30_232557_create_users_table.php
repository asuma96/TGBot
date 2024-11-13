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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_bot')->default(false)->comment('bot if not');
            $table->string('first_name',120)->nullable(false)->comment('first user name');
            $table->string('username',150)->nullable(false)->comment('username');
            $table->string('language_code',10)->default(false);
            $table->date('deleted_at')->nullable()->comment('Date when users was deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
