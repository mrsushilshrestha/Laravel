<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Show all contacts
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    // Show single contact
    public function show($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            abort(404, 'Contact not found');
        }

        return view('contacts.show', compact('contact'));
    }

    // Show create form
    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'description' => 'required|string',
        ]);
    
        Contact::create($validated);
    
        return redirect()->route('contacts.index')->with('success', 'Contact created successfully!');
    }
    
    // Show edit form
    public function edit($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            abort(404, 'Contact not found');
        }

        return view('contacts.edit', compact('contact'));
    }

    // Update contact
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            abort(404, 'Contact not found');
        }

        $validated = $request->validate([
            'email' => 'required|email',
            'description' => 'required|string',
        ]);

        $contact->update($validated);

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');
    }

    // Delete contact
    public function destroy($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            abort(404, 'Contact not found');
        }

        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
    }
}
