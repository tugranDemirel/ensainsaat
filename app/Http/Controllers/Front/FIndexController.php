<?php

namespace App\Http\Controllers\Front;

use App\Enum\RealEstate\RealEstateIsActiveEnum;
use App\Enum\RealEstate\RealEstateStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\RealEstate;
use App\Models\Service;
use Illuminate\Http\Request;

class FIndexController extends Controller
{
    public function index()
    {
        $services  = Service::where('is_home', 1)
                        ->where('is_active', 1)
                        ->where('is_featured', 1)
                        ->orderBy('order', 'asc')
                        ->get();
        $homes = RealEstate::where('is_active', RealEstateIsActiveEnum::IS_ACTIVE)
                    ->where('status', '!=', RealEstateStatusEnum::STATUS_SOLD)
                    ->limit(6)
                    ->get();
        return view('front.index', compact('services', 'homes'));
    }
}
