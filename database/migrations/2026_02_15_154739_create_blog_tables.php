<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Tabel Categories
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique(); // Untuk URL SEO friendly (misal: tips-kesehatan)
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // 2. Tabel Posts
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            
            // Relasi ke Profile (Penulis)
            $table->foreignId('profile_id')->constrained('profiles')->onDelete('cascade');
            
            // Relasi ke Category
            // nullOnDelete: Jika kategori dihapus, post tidak hilang, tapi kategorinya jadi NULL
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            
            $table->string('title');
            $table->string('slug')->unique(); // URL: domain.com/blog/judul-artikel
            $table->text('excerpt')->nullable(); // Ringkasan pendek untuk tampilan card
            $table->longText('body'); // Isi artikel utama (bisa support HTML/Markdown)
            $table->string('image')->nullable(); // Thumbnail/Cover image path
            
            // Status publikasi
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->timestamp('published_at')->nullable(); // Tanggal terbit
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('categories');
    }
};