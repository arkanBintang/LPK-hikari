<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Module extends Model
{
    use HasUuids;

    protected $guarded = [];

    // Relasi balik: Module milik 1 Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Relasi: 1 Module punya banyak Lesson
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}