<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the candidatures.
     */
    public function index()
    {
        $candidatures = DB::table('candidatures')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
            
        return view('admin.candidatures.index', compact('candidatures'));
    }

    /**
     * Display the specified candidature.
     */
    public function show($id)
    {
        $candidature = DB::table('candidatures')->where('id', $id)->first();
        
        if (!$candidature) {
            return redirect()->route('admin.candidatures.index')
                ->with('error', 'Candidature non trouvée.');
        }
        
        return view('admin.candidatures.show', compact('candidature'));
    }

    /**
     * Remove the specified candidature from storage.
     */
    public function destroy($id)
    {
        DB::table('candidatures')->where('id', $id)->delete();
        
        return redirect()->route('admin.candidatures.index')
            ->with('success', 'Candidature supprimée avec succès.');
    }

    /**
     * Export candidatures to CSV.
     */
    public function export()
    {
        $candidatures = DB::table('candidatures')
            ->orderBy('created_at', 'desc')
            ->get();

        $filename = 'candidatures_prix_excellence_' . date('Y-m-d_H-i-s') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
            'Pragma' => 'public',
        ];

        $callback = function() use ($candidatures) {
            $file = fopen('php://output', 'w');
            
            // BOM pour l'UTF-8
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
            
            // En-têtes CSV
            fputcsv($file, [
                'ID',
                'Nom Entreprise',
                'Statut Juridique',
                'Pays/Ville Siège',
                'Nom Responsable',
                'Fonction Responsable',
                'Email Responsable',
                'Téléphone Responsable',
                'Adresse',
                'Secteur Activité',
                'Effectif',
                'Chiffre Affaires',
                'Site Web',
                'Description Activités',
                'Objectifs Développement',
                'Stratégies Marketing',
                'Défis Entreprise',
                'Innovations Produits',
                'Responsabilité Sociale',
                'Plans Expansion',
                'Date de Soumission'
            ], ';');

            // Données
            foreach ($candidatures as $candidature) {
                fputcsv($file, [
                    $candidature->id,
                    $candidature->nom_entreprise ?? '',
                    $candidature->statut_juridique ?? '',
                    $candidature->pays_ville_siege ?? '',
                    $candidature->nom_responsable ?? '',
                    $candidature->fonction_responsable ?? '',
                    $candidature->email_responsable ?? '',
                    $candidature->telephone_responsable ?? '',
                    $candidature->adresse ?? '',
                    $candidature->secteur_activite ?? '',
                    $candidature->effectif ?? '',
                    $candidature->chiffre_affaires ?? '',
                    $candidature->site_web ?? '',
                    $candidature->description_activites ?? '',
                    $candidature->objectifs_developpement ?? '',
                    $candidature->strategies_marketing ?? '',
                    $candidature->defis_entreprise ?? '',
                    $candidature->innovations_produits ?? '',
                    $candidature->responsabilite_sociale ?? '',
                    $candidature->plans_expansion ?? '',
                    $candidature->created_at ? date('d/m/Y H:i', strtotime($candidature->created_at)) : ''
                ], ';');
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
