<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request) {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'complaint' => 'required',
        ]);

        Contact::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'complaint' => $data['complaint'],
            ]);

            return redirect('/contact')->with('status', 'Message Sent Successfully!');
    }
}
