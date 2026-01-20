<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'link',
        'image',
        'second_image',
        'first_preview',
        'second_preview',
        'second_preview',
        'project_previews',
        'title',
        'video',
        'year',
        'category',
        'description',
        'challenge',
        'as',
        'show_in_home',
        'show_in_projects',
        'theme',
    ];

    protected $casts = [
        'show_in_home' => 'boolean',
        'show_in_projects' => 'boolean',
        'project_previews' => 'array',
    ];
}
