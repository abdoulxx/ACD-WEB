<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InscriptionController extends Controller
{
    /**
     * Store a newly created inscription in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom_prenom' => 'required|string|max:255',
            'entreprise' => 'nullable|string|max:255',
            'fonction' => 'nullable|string|max:255',
            'pack_choisi' => 'required|string|in:standard,premium',
            'destinations' => 'required|array',
            'destinations.*' => 'string|in:ci,ma,fr',
            'telephone' => 'required|string|max:20',
            'whatsapp' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // Logique de sauvegarde des données (à implémenter)
        // Par exemple: 
        // Inscription::create($request->validated());

        return redirect()->back()->with('show_success_modal', true);
    }
}
