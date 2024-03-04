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

        Schema::create('client_articles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('locale_id')->unsigned()->nullable();
            $table->foreign('locale_id')->references('id')->on('locales')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->nullable(); // Nullable foreign key for users table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); // Set null on delete
            $table->string('name');
            $table->string('file_url')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_articles');
    }
};
