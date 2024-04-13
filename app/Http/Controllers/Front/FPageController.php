<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class FPageController extends Controller
{
    public function about()
    {
        $clients = Client::query()
            ->get();

        return view('front.page.about', compact('clients'));
    }
}
