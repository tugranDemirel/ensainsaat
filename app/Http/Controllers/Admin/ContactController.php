<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(): Factory|View|Application
    {
        /** @var Contact $contacts */
        $contacts = Contact::query()
            ->orderBy('is_seen')
            ->orderBy('created_at')
            ->get();

        return view('admin.contact.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        $contact->update([
            'is_seen' => true
        ]);

        return view('admin.contact.show', compact('contact'));
    }
}
