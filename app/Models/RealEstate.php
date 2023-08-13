<?php

namespace App\Models;

use App\Enum\RealEstate\RealEstateIsActiveEnum;
use App\Enum\RealEstate\RealEstatePurposeEnum;
use App\Enum\RealEstate\RealEstateStatusEnum;
use App\Enum\RealEstate\RealEstateTypeEnum;
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
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'is_active' => RealEstateIsActiveEnum::class,
        'status' => RealEstateStatusEnum::class,
        'type' => RealEstateTypeEnum::class,
        'purpose' => RealEstatePurposeEnum::class,
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
