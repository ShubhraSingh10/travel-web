<?php

namespace App\Models;

use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory, Commentable;

    protected $casts = [
        'images' => 'array',
    ];
}
