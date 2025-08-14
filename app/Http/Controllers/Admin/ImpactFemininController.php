<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImpactFemininController extends Controller
{
    /**
     * Display a listing of the impact feminin candidatures.
     */
    public function index()
    {
        $candidatures = DB::table('impact_feminin_candidatures')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
            
        return view('admin.impact-feminin.index', compact('candidatures'));
    }

    /**
     * Display the specified candidature.
     */
    public function show($id)
    {
        $candidature = DB::table('impact_feminin_candidatures')->where('id', $id)->first();
        
        if (!$candidature) {
            return redirect()->route('admin.impact-feminin.index')
                ->with('error', 'Candidature Impact Féminin non trouvée.');
        }
        
        return view('admin.impact-feminin.show', compact('candidature'));
    }

    /**
     * Show the form for editing the specified candidature.
     */
    public function edit($id)
    {
        $candidature = DB::table('impact_feminin_candidatures')->where('id', $id)->first();
        
        if (!$candidature) {
            return redirect()->route('admin.impact-feminin.index')
                ->with('error', 'Candidature Impact Féminin non trouvée.');
        }
        
        return view('admin.impact-feminin.edit', compact('candidature'));
    }

    /**
     * Update the specified candidature in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $updated = DB::table('impact_feminin_candidatures')
            ->where('id', $id)
            ->update([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'societe' => $request->societe,
                'poste' => $request->poste,
                'prix_choisi' => $request->prix_choisi,
                'updated_at' => now(),
            ]);

        if ($updated) {
            return redirect()->route('admin.impact-feminin.index')
                ->with('success', 'Candidature Impact Féminin mise à jour avec succès.');
        }

        return back()->with('error', 'Erreur lors de la mise à jour.');
    }

    /**
     * Remove the specified candidature from storage.
     */
    public function destroy($id)
    {
        DB::table('impact_feminin_candidatures')->where('id', $id)->delete();
        
        return redirect()->route('admin.impact-feminin.index')
            ->with('success', 'Candidature Impact Féminin supprimée avec succès.');
    }

    /**
     * Export impact feminin candidatures to CSV.
     */
    public function export()
    {
        $candidatures = DB::table('impact_feminin_candidatures')
            ->orderBy('created_at', 'desc')
            ->get();

        $filename = 'candidatures_impact_feminin_' . date('Y-m-d_H-i-s') . '.csv';
        
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
                'Nom',
                'Prénom',
                'Email',
                'Téléphone',
                'Pays',
                'Ville',
                'Entreprise/Organisation',
                'Poste',
                'Secteur d\'Activité',
                'Années d\'Expérience',
                'Type de Nomination',
                'Nom du Nominé',
                'Relation avec Nominé',
                'Réalisations Marquantes',
                'Impact Social/Économique',
                'Innovation/Créativité',
                'Leadership',
                'Engagement Communautaire',
                'Défis Surmontés',
                'Vision Future',
                'Autres Informations',
                'Date de Soumission'
            ], ';');

            // Données
            foreach ($candidatures as $candidature) {
                fputcsv($file, [
                    $candidature->id,
                    $candidature->nom ?? '',
                    $candidature->prenom ?? '',
                    $candidature->email ?? '',
                    $candidature->telephone ?? '',
                    $candidature->pays ?? '',
                    $candidature->ville ?? '',
                    $candidature->entreprise_organisation ?? '',
                    $candidature->poste ?? '',
                    $candidature->secteur_activite ?? '',
                    $candidature->annees_experience ?? '',
                    $candidature->type_nomination ?? '',
                    $candidature->nom_nomine ?? '',
                    $candidature->relation_nomine ?? '',
                    $candidature->realisations_marquantes ?? '',
                    $candidature->impact_social_economique ?? '',
                    $candidature->innovation_creativite ?? '',
                    $candidature->leadership ?? '',
                    $candidature->engagement_communautaire ?? '',
                    $candidature->defis_surmontes ?? '',
                    $candidature->vision_future ?? '',
                    $candidature->autres_informations ?? '',
                    $candidature->created_at ? date('d/m/Y H:i', strtotime($candidature->created_at)) : ''
                ], ';');
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
