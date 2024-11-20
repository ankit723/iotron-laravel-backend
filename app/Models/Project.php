<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Define fillable fields to allow mass assignment
    protected $fillable = [
        'name',
        'url',
        'displayImage',
        'client_brief',
        'services',
        'tools',
    ];

    protected $casts = [
        'displayImage' => 'array',
        'services' => 'array',
        'tools' => 'array',
    ];
}
