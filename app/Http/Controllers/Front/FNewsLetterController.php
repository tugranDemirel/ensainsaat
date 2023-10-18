<?php

namespace App\Http\Controllers\Front;

use App\Enum\RealEstate\RealEstateIsActiveEnum;
use App\Enum\RealEstate\RealEstateStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use App\Models\RealEstate;
use Illuminate\Http\Request;

class FNewsLetterController extends Controller
{
    public function index()
    {
        $newsletters = NewsLetter::where('is_active', 1)
                        ->orderBy('order', 'asc')
                        ->get();
        $homes = RealEstate::where('is_active', RealEstateIsActiveEnum::IS_ACTIVE)
            ->where('status', '!=', RealEstateStatusEnum::STATUS_SOLD)
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
        return view('front.news-letter.index', compact('newsletters', 'homes'));
    }

    public function show($slug)
    {
        $newsletter = NewsLetter::where('is_active', 1)
                        ->where('slug', $slug)
                        ->firstOrFail();

        return view('front.news-letter.show', compact('newsletter'));
    }
}
