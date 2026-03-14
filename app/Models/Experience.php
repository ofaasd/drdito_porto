<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'profile_id',
        'position',
        'company',
        'location',
        'start_date',
        'end_date',
        'is_current',
        'description',
    ];

    // Mengubah tinyint(1) menjadi boolean true/false otomatis
    protected $casts = [
        'is_current' => 'boolean',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}