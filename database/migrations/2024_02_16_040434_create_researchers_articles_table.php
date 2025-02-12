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
        Schema::create('researchers_articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_topic');
            $table->text('authors');
            $table->string('article_type');
//            $table->enum('article_type', [
//                'Scopus',
//                'Oak',
//            ])->default('Scopus');
            $table->string('protection_year');
            $table->string('file_url')->nullable();
            $table->string('photo_url')->nullable();
            $table->bigInteger('locale_id')->unsigned()->nullable();
            $table->foreign('locale_id')->references('id')->on('locales')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('researchers_articles');
    }
};
