<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'attribute',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
