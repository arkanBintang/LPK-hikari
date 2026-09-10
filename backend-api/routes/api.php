<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Course;


// Rute bawaan Laravel untuk mengambil data user yang sedang login
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Endpoint untuk mengambil daftar mata pelajaran (Course)
Route::get('/courses', function () {
    // Mengambil semua course yang di-publish, beserta module dan lesson-nya
    $courses = Course::with('modules.lessons')->where('is_published', true)->get();
    
    return response()->json([
        'success' => true,
        'data' => $courses
    ]);
});