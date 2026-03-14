<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Profiles Table
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('titles')->nullable(); // Gelar (M.D., Ph.D, dll)
            $table->text('summary')->nullable();
            $table->text('specialties')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
            $table->softDeletes(); // Request Anda
        });

        // 2. Educations Table
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->string('institution');
            $table->string('degree');
            $table->string('field_of_study')->nullable();
            $table->string('location')->nullable();
            $table->string('start_year', 4)->nullable();
            $table->string('end_year', 4)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // 3. Experiences Table
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->string('position');
            $table->string('company');
            $table->string('location')->nullable();
            $table->string('start_date')->nullable(); // String karena format CV beragam (Bulan Thn)
            $table->string('end_date')->nullable();
            $table->boolean('is_current')->default(false);
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // 4. Certifications Table
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('issuer')->nullable();
            $table->string('year', 4)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // 5. Publications Table
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->text('title'); // Text karena judul jurnal bisa panjang
            $table->string('category')->default('Other'); // Journal, Book, etc
            $table->string('year', 4)->nullable();
            $table->string('publisher_or_journal')->nullable();
            $table->text('link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // 6. Awards Table
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('issuer')->nullable();
            $table->string('year', 4)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // 7. Organizations Table
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->string('role');
            $table->string('organization_name');
            $table->string('period')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
        Schema::dropIfExists('awards');
        Schema::dropIfExists('publications');
        Schema::dropIfExists('certifications');
        Schema::dropIfExists('experiences');
        Schema::dropIfExists('educations');
        Schema::dropIfExists('profiles');
    }
};