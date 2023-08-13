<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'address',
        'description',
        'image',
        'status',
        'type',
        'purpose',
        'video',
        'map',
        'is_active',
    ];

    public function realEstateMedias()
    {
        return $this->hasMany(RealEstateMedia::class);
    }

    public function RealEstateAttribute()
    {
        return $this->hasMany(RealEstateAttribute::class);
    }


}
