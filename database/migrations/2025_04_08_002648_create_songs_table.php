<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->string('title');
            $table->string('artist');
            $table->text('description');
            $table->string('image_url')->nullable();
            $table->string('audio_url')->nullable();
            $table->date('released_at')->nullable();
            $table->string('filename')->nullable();
            $table->timestamps();
            // Define foreign key constraints:
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('set null');
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};


