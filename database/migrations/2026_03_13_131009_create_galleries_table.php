<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            
            // Relasi ke profil (opsional, tapi disarankan agar konsisten dengan tabel lain)
            $table->foreignId('profile_id')->constrained('profiles')->onDelete('cascade');
            
            $table->string('title'); // Judul portfolio/galeri
            $table->text('description')->nullable(); // Detail informasi / deskripsi
            $table->string('image'); // Path gambar
            
            // Kategori untuk filter (misal: 'branding', 'recent', 'web-design')
            // Nantinya di-print sebagai CSS class di Blade
            $table->string('category')->nullable(); 
            
            // Opsional: jika gambar diklik ingin mengarah ke link eksternal atau halaman detail
            $table->string('link')->nullable(); 
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};