<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('tags');
            $table->string('genre');
            $table->string('contact_info');
            $table->text('description');
            $table->enum('status', ['private', 'public', 'in process'])->default('private');
            $table->text('copyright')->nullable();
            $table->date('release_date')->nullable();
            $table->string('file_location')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
