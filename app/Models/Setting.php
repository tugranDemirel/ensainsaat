<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'meta_description',
        'meta_keywords',
        'header_text',
        'footer_text',
        'logo',
        'favicon',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
        'address',
        'phone',
        'fax',
        'email',
    ];
}
