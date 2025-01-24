<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'name',
        'image',
        'summary',
        'phone',
        'email',
        'links',
        'skills',
        'languages',
    ];

    protected $casts = [
        'links' => 'array',
        'skills' => 'array',
        'languages' => 'array',
    ];
}
