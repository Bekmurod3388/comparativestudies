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

        Schema::create('researchers_books', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('locale_id')->unsigned()->nullable();
            $table->foreign('locale_id')->references('id')->on('locales')->onDelete('cascade');
            $table->string('name');
            $table->string('authors');
            $table->string('publisher')->nullable();
            $table->string('file_url')->nullable();
            $table->string('photo_url')->nullable();
            $table->dateTime('published_date')->nullable();
//            $table->unsignedBigInteger('researcher_id');
//            $table->foreign('researcher_id')->references('id')->on('researchers');
//            $table->string('name');
//            $table->string('country')->nullable();
//            $table->date('pub_date')->nullable();
//            $table->bigInteger('pages')->nullable();
//            $table->string('publisher')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('researchers_books');
    }
};
