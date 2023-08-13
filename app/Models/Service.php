<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'image',
        'icon',
        'order',
        'is_active',
        'is_home',
        'is_featured',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function attributes()
    {
        return $this->hasMany(ServiceAttribute::class);
    }

    public function attribute()
    {
        return $this->hasOne(ServiceAttribute::class);
    }
}
