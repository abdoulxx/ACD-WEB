<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RencontreInscription2026;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRencontreMail;
use App\Mail\AdminRencontreMail;

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
            'destinations.*' => 'string',
            'telephone' => 'required|string|max:20',
            'whatsapp' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $validatedData = $validator->validated();

        // Sauvegarde des données
        $inscription = RencontreInscription2026::create($validatedData);

        // Envoi des e-mails
        $adminEmail = 'acdnotif@gmail.com'; // Remplacez par votre email si nécessaire
        Mail::to($inscription->email)->send(new UserRencontreMail($inscription));
        Mail::to($adminEmail)->send(new AdminRencontreMail($inscription));

        return redirect()->back()->with('success', 'Votre inscription a été enregistrée avec succès !');
    }
}
