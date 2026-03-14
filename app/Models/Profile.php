<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'full_name',
        'titles',
        'summary',
        'email',
    ];

    // Relasi ke Educations
    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    // Relasi ke Experiences
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    // Relasi ke Certifications
    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    // Relasi ke Publications
    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    // Relasi ke Awards
    public function awards()
    {
        return $this->hasMany(Award::class);
    }

    // Relasi ke Organizations
    public function organizations()
    {
        return $this->hasMany(Organization::class);
    }
    // Di dalam App\Models\Profile.php

    public function specialties()
    {
        return $this->hasMany(Specialty::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function galleries(){
        return $this->hasMany(Gallery::class);
    }
    public function achievements(){
        return $this->hasMany(Achievement::class);
    }
}