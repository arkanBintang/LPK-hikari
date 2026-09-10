<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Course extends Model
{
    use HasUuids;

    protected $guarded = []; // Mengizinkan semua kolom diisi

    // Relasi: 1 Course punya banyak Module
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}