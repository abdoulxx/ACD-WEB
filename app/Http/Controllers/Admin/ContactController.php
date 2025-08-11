<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\Admin\ContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.contact.index', [
            'contacts' => Contact::orderby('created_at', 'desc')->paginate(25)
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.formulaire', [
            'contact' => $contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'message' => 'required',
        ]);

        $contact->update($validatedData);

        return redirect()->route('admin.contact.index')->with('success', 'Cet enregistrement a été modifié');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Cet enregistrement a été supprimé avec succès');
    }

}
