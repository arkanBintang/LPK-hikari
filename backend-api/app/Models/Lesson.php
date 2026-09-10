<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Lesson extends Model
{
    use HasUuids;

    protected $guarded = [];

    // Relasi balik: Lesson milik 1 Module
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    
    // Karena kolom content_payload bentuknya JSON di database, kita ubah formatnya saat diambil
    protected $casts = [
        'content_payload' => 'array',
    ];
}