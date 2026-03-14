<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('specialties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable(); // Kolom deskripsi baru
            $table->timestamps();
            $table->softDeletes();
        });

        // Opsi: Hapus kolom 'specialties' lama di tabel profiles jika sudah tidak dipakai
        // Schema::table('profiles', function (Blueprint $table) {
        //     $table->dropColumn('specialties');
        // });
    }

    public function down(): void
    {
        Schema::dropIfExists('specialties');
        
        // Kembalikan kolom jika rollback (opsional)
        // Schema::table('profiles', function (Blueprint $table) {
        //     $table->text('specialties')->nullable();
        // });
    }
};