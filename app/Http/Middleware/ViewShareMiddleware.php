<?php

namespace App\Http\Middleware;

use App\Enum\RealEstate\RealEstateIsActiveEnum;
use App\Models\NewsLetter;
use App\Models\RealEstate;
use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;

class ViewShareMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $_setting = Setting::first();
        view()->share('_setting', $_setting);

        $_newsletters = NewsLetter::where('is_active', 1)->orderBy('order', 'desc')->limit(3)->get();
        view()->share('_newsletters', $_newsletters);

        $_realEstates = RealEstate::where('is_active', RealEstateIsActiveEnum::IS_ACTIVE)
                        ->orderBy('created_at', 'desc')
                        ->limit(3)
                        ->get();
        view()->share('_realEstates', $_realEstates);

        return $next($request);
    }
}
