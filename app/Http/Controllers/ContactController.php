<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function blog_contact()
    {
        return view('pages.blog_contact');
    }
    public function list()
    {
        $contacts = Contact::latest()->get();
        // dd($contacts);
        return view('pages.blog_contact', compact('contacts'));
    }
    public function store(Request $request)
    {
        if (auth()->check()) {
            // User logged in
            $userId = auth()->id();
            // Example: contact model e user_id set korte paren
        } else {
            // Guest user
        }

        $contacts = Contact::create([
            'message' => $request->message,
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'status' => 1,
        ]);
        return redirect()->back()->with('success', 'Thank you for your message!');
    }

    public function edit(Contact $contact)
    {
        return view('admin.contact_edit', compact('contact'));
    }
    public function update(Request $request, Contact $contact)
    {
        $contact->update([
            'message' => $request->message,
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
        ]);
        return redirect()->route('contact');
    }
    public function delete($id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully!');
    }
    public function updateStatus(Contact $contact)
    {
        if ($contact->status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        // dd($contact);
        $contact->update([
            'status' => $status,
        ]);
        return back();
    }
}
