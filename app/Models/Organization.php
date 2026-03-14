<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'profile_id',
        'role',
        'organization_name',
        'period',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}