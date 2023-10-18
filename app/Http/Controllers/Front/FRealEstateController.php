<?php

namespace App\Http\Controllers\Front;

use App\Enum\RealEstate\RealEstateIsActiveEnum;
use App\Http\Controllers\Controller;
use App\Models\RealEstate;
use Illuminate\Http\Request;

class FRealEstateController extends Controller
{
    public function index()
    {
        $homes = RealEstate::where('is_active', RealEstateIsActiveEnum::IS_ACTIVE)
                ->with(['realEstateMedias', 'realEstateAttribute'])
                ->orderBy('created_at', 'desc')
                ->get();
        return view('front.real-estate.index', compact('homes'));
    }
}
