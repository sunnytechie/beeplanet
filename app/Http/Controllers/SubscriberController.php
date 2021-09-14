<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function store(Request $request) {
        $data = request()->validate([
            'email' => 'required',
        ]);

        Subscriber::create([
            'email' => $data['email'],
            ]);

            return redirect('/')->with('status', 'Subscribed Successfully!');
    }
}
