<?php

namespace App\Http\Controllers\Front;

use App\Enum\RealEstate\RealEstateIsActiveEnum;
use App\Enum\RealEstate\RealEstatePurposeEnum;
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

    public function purposeHome(Request $request)
    {

        $homes = RealEstate::query();
        if ($request->purpose == 'kiralik')
        {
            $homes = $homes->where('purpose', RealEstatePurposeEnum::PURPOSE_RENT);
            $purpose = RealEstatePurposeEnum::PURPOSE_RENT;

        }
        elseif ($request->purpose == 'satilik')
        {
            $homes = $homes->where('purpose', RealEstatePurposeEnum::PURPOSE_SALE);
            $purpose = RealEstatePurposeEnum::PURPOSE_SALE;
        }

        $homes = $homes->where('is_active', RealEstateIsActiveEnum::IS_ACTIVE)
                ->with(['realEstateMedias', 'realEstateAttribute'])
                ->orderBy('created_at', 'desc')
                ->get();

        return view('front.real-estate.index', compact('homes', 'purpose'));
    }

    public function show($purpose, $slug)
    {
        $home = RealEstate::where('slug', $slug)
                ->where('is_active', RealEstateIsActiveEnum::IS_ACTIVE)
                ->with(['realEstateMedias', 'realEstateAttribute'])
                ->firstOrFail();

        return view('front.real-estate.show', compact('home'));
    }

}
