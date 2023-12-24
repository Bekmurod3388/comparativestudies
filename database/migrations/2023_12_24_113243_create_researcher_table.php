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
        Schema::disableForeignKeyConstraints();

        Schema::create('researcher', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('position')->nullable();
            $table->string('research')->nullable();
            $table->bigInteger('scholar_link')->nullable();
            $table->string('email')->nullable();
            $table->string('img')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('researcher');
    }
};
