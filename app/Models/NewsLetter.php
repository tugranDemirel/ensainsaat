<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'short_content',
        'content',
        'is_active',
        'order',
    ];
}
