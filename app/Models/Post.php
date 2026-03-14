<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'profile_id',
        'category_id',
        'title',
        'slug',
        'excerpt',
        'body',
        'image', 
        'status',
        'published_at',
    ];
    public function getImageUrlAttribute()
    {
        // Jika ada gambar, kembalikan URL lengkap ke storage
        if ($this->image && Storage::disk('public')->exists($this->image)) {
            return Storage::url($this->image);
        }

        // Jika tidak ada, kembalikan gambar default (placeholder)
        return asset('images/default-post.jpg'); 
    }

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Relasi ke Kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi ke Penulis (Profile)
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    // Scope Helper: Untuk mengambil hanya yang status published
    // Cara pakai: Post::published()->get();
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                     ->where('published_at', '<=', now());
    }
}