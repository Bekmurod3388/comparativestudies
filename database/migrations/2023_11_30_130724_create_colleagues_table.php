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
        Schema::create('colleagues', function (Blueprint $table) {
            $table->id();
            $table->char('fullname');
            $table->char('position');
            $table->char('research_fields');
            $table->char('photo')->nullable();
            $table->char('email');
            $table->char('facebook_url');
            $table->char('twitter_url');
            $table->char('instagram_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleagues');
    }
};
