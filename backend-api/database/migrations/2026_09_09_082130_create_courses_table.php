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
      Schema::create('courses', function (Blueprint $table) {
        $table->uuid('id')->primary();
        $table->string('slug')->unique();
        $table->string('title');
        $table->text('description');
        $table->uuid('prerequisite_course_id')->nullable(); // Untuk mengunci course
        $table->integer('passing_grade')->default(80); // Syarat nilai lulus
        $table->boolean('is_published')->default(false);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
