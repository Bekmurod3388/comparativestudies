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
        Schema::create('abstracts', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name');
            $table->bigInteger('locale_id')->unsigned()->nullable();
            $table->foreign('locale_id')->references('id')->on('locales')->onDelete('cascade');
            $table->string('dissertation_topic');
            $table->enum('academic_degree', [
                'Bachelor',
                'Master',
                'PhD',
                'DSc',
                'Associate Degree',
                'Professional Degree',
                'Doctor of Medicine',
                'Juris Doctor',
                'Master of Business Administration',
                'Doctor of Education',
                'Doctor of Philosophy'
            ])->default('Bachelor');
            $table->string('specialty_code_and_name');
            $table->year('protection_year');
            $table->string('file_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abstracts');
    }
};
