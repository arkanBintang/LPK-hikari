<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Mata Pelajaran (Course)
        $course = Course::create([
            'slug' => 'hiragana-mastery',
            'title' => 'Hiragana Mastery',
            'description' => 'Fondasi awal belajar bahasa Jepang. Kuasai huruf dasar Hiragana.',
            'passing_grade' => 80,
            'is_published' => true
        ]);

        // 2. Buat Bab (Module) di dalam Course tersebut
        $module = $course->modules()->create([
            'title' => 'Module 1: The Vowels (あ, い, う, え, お)',
            'sort_order' => 1
        ]);

        // 3. Buat Materi (Lesson) di dalam Module tersebut
        $module->lessons()->create([
            'title' => 'Pengenalan Vokal Dasar',
            'type' => 'THEORY',
            'content_payload' => [
                'huruf' => [
                    ['karakter' => 'あ', 'romaji' => 'a'],
                    ['karakter' => 'い', 'romaji' => 'i'],
                    ['karakter' => 'う', 'romaji' => 'u'],
                    ['karakter' => 'え', 'romaji' => 'e'],
                    ['karakter' => 'お', 'romaji' => 'o']
                ]
            ],
            'xp_reward' => 10,
            'sort_order' => 1
        ]);
    }
}