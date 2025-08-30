<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }

    public function admin()
    {
        $contacts = Contact::latest()->get();
        return response()->json([
            'total_contacts' => $contacts->count(),
            'contacts' => $contacts->map(function($contact) {
                return [
                    'id' => $contact->id,
                    'name' => $contact->name,
                    'email' => $contact->email,
                    'subject' => $contact->subject,
                    'message' => substr($contact->message, 0, 100) . '...',
                    'created_at' => $contact->created_at->format('Y-m-d H:i:s')
                ];
            })
        ]);
    }
}
