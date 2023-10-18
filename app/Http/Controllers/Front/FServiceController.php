<?php

namespace App\Http\Controllers\Front;

use App\Enum\RealEstate\RealEstateIsActiveEnum;
use App\Enum\RealEstate\RealEstateStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\RealEstate;
use App\Models\Service;
use Illuminate\Http\Request;

class FServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', 1)
                    ->orderBy('created_at', 'desc')
                    ->get();
        $homes = RealEstate::where('is_active', RealEstateIsActiveEnum::IS_ACTIVE)
                    ->where('status', '!=', RealEstateStatusEnum::STATUS_SOLD)
                    ->orderBy('created_at', 'desc')
                    ->limit(4)
                    ->get();
        return view('front.service.index', compact('services', 'homes'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)
                    ->where('is_active', 1)
                    ->firstOrFail();
        return view('front.service.show', compact('service'));
    }
}
