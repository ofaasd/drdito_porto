<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'educations'; // Optional jika ikut naming convention

    protected $fillable = [
        'profile_id',
        'institution',
        'degree',
        'field_of_study',
        'location',
        'start_year',
        'end_year',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}