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
        Schema::create('facultybooks', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('authors');
            $table->dateTime('publication_date');
            $table->string('title');
            $table->string('description');
            $table->string('image_url')->nullable();
            $table->string('file_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facultybooks');
    }
};