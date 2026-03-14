<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'profile_id',
        'title',
        'description',
        'image',
        'category',
        'link',
    ];

    // Accessor untuk mendapatkan URL gambar dengan mudah
    public function getImageUrlAttribute()
    {
        if ($this->image && Storage::disk('public')->exists($this->image)) {
            return Storage::url($this->image);
        }
        return asset('assets/img/default-portfolio.jpg'); // Fallback image
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}