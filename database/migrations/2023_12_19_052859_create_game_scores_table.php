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
        Schema::create('game_scores', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->foreign('user')->references('username')->on('users');
            $table->unsignedBigInteger('game_version_id');
            $table->foreign("game_version_id")->references('id')->on('game_versions');
            $table->timestamp('timestamp')->useCurrent();
            $table->decimal('score', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_scores');
    }
};
