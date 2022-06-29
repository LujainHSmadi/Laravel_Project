<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        return view('pages.contact');
    }

    public function create()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;

        $contact->save();

        return redirect('contact')
            ->with('success', 'Thank you for contact us!');

    }
}
