<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstateMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'real_estate_id',
        'uuid',
        'images',
    ];

    public function realEstate()
    {
        return $this->belongsTo(RealEstate::class);
    }
}
