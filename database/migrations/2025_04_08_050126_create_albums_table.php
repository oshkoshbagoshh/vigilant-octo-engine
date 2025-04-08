<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover_image')->nullable();
            $table->date('release_date')->nullable();
            $table->text('description')->nullable();
            $table->string('copyright')->nullable();
            $table->float('price')->nullable();
            $table->foreignId('song_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
