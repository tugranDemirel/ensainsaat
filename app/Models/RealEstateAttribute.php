<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstateAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'real_estate_id',
        'price',
        'area',
        'bedrooms',
        'bathrooms',
        'garages',
        'year_built',
    ];

    public function realEstate()
    {
        return $this->belongsTo(RealEstate::class);
    }
}
