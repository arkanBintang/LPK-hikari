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
       Schema::create('lessons', function (Blueprint $table) {
        $table->uuid('id')->primary();
        $table->foreignUuid('module_id')->constrained('modules')->cascadeOnDelete();
        $table->string('title');
        $table->enum('type', ['THEORY', 'CANVAS_DRILL', 'QUIZ', 'CAPSTONE']); 
        $table->json('content_payload'); // Menyimpan teks, soal kuis, atau instruksi
        $table->integer('xp_reward')->default(10);
        $table->integer('sort_order'); // Urutan materi
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
