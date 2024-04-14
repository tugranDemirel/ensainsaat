<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FContactController extends Controller
{
    public function index()
    {
        return view('front.page.contact');
    }

    public function store(ContactStoreRequest $request): RedirectResponse
    {
        $attributes = collect($request->validated());

        $create = Contact::query()
            ->create($attributes->toArray());

        if ($create) {
            return redirect()->back()->with('success', 'Başarılı bir şekilde iletişim mesajınız gönderilmiştir.');
        } else {
            return redirect()->back()->with('error', 'İletişim mesajınız gönderilirken bir hata ile karşılaşıldı. lütfen daha sonra tekrar deneyiniz.');
        }
    }
}
