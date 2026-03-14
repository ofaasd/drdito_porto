<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Award extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'profile_id',
        'title',
        'issuer',
        'year',
        'description',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}