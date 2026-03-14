<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'profile_id',
        'title',
        'category', // Journal, Book, etc
        'year',
        'publisher_or_journal',
        'link',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}