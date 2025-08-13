<?php

namespace App\Http\Controllers;

//use PDF;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\CandidatureSubmitted;
use Illuminate\Support\Facades\Mail;


class CandidatureController extends Controller
{
    /**
     * //Appel à la candidature
     */
    public function index()
    {
        return view("inscription.appel_candidature");
    }




    /**
     * //Appel à la candidature formulaire d'inscription
     */
    public function indexAppelCandidature()
    {
        return view("inscription.formulaire");
    }


   public function storeAppelCandidature(Request $request)
    {
        $data = $request->validate([
            'nom_entreprise' => 'required|string',
            'statut_juridique' => 'required|string',
            'numero_rccm' => 'required|string',
            'pays_ville_siege' => 'required|string',

            'nom_responsable' => 'required|string',
            'fonction_responsable' => 'required|string',
            'email_responsable' => 'required|email',
            'telephone_responsable' => 'required|string',

            'produits_services' => 'required|string',
            'chiffre_affaires' => 'required|string',

            'logo_hd' => 'required|image',
            'piece_identite' => 'required|file|mimes:pdf,jpg,jpeg,png',
        ]);

        // Upload des fichiers
        $data['logo_hd'] = $request->file('logo_hd')->store('candidatures/logos');
        $data['piece_identite'] = $request->file('piece_identite')->store('candidatures/identites');

        // Enregistrement
        $candidature = Candidature::create($data);

        // Génération du PDF (si template disponible)
        $data['id'] = $candidature->id;
        $pdf = PDF::loadView('pdf.candidature', ['data' => $data])->output();

        // Envoi de mail
        Mail::to($data['email_responsable'])->send(new CandidatureSubmitted($data, $pdf));
        Mail::to(['dezditdez@gmail.com', 'bilebossombra@gmail.com'])->send(new CandidatureSubmitted($data, $pdf));

        return back()->with('success', __('form_candidature.success_message'));
    }
}
