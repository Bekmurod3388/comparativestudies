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
        Schema::create('dissertations', function (Blueprint $table) {
            $table->id();
            $table->char('language');
            $table->string('country');
            $table->string('author');
            $table->text('topic');
            $table->string('file_url')->nullable();
            $table->dateTime('thesis_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dissertations');
    }
};
