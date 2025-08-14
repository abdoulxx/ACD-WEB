<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImpactFemininCandidature;
use App\Mail\ImpactFemininCandidatureMail;
use App\Mail\AdminImpactFemininNotification;
use Illuminate\Support\Facades\Mail;

class ImpactFemininController extends Controller
{
    /**
     * Affiche le formulaire de candidature.
     */
    public function create()
    {
        return view('pages.candidature-impact-feminin');
    }

    /**
     * Enregistre une nouvelle candidature.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:255',
            'societe' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
            'prix_choisi' => 'required|string|in:eclosion,resilience,visionnaire',
        ]);

        $candidature = ImpactFemininCandidature::create($data);

        $adminEmail = 'acdnotif@gmail.com';

        // Envoyer les e-mails
        Mail::to($candidature->email)->send(new ImpactFemininCandidatureMail($candidature));
        Mail::to($adminEmail)->send(new AdminImpactFemininNotification($candidature));

        return back()->with('success', __('impact_feminin_form.success_message'));
    }
}