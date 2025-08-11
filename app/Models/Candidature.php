<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    protected $fillable = [
        // Informations générales
        'nom_entreprise',
        'date_creation',
        'statut_juridique',
        'numero_rccm',
        'pays_ville_siege',
        'telephone_professionnel',
        'email_professionnel',
        'adresse_postale',
        'site_web',
        'reseaux_sociaux',
        'nom_responsable',
        'fonction_responsable',
        'email_responsable',
        'telephone_responsable',

        // Profil & Activité
        'secteur_activite',
        'produits_services',
        'nombre_employes',
        'chiffre_affaires',

        // Performances
        'resultats_innovations',
        'certifications_labels',
        'projets_impact',
        'distinctions',

        // Fichiers
        'brochure',
        'photos',
        'piece_identite',
        'logo_hd',
        'signature',

        // Engagement
        'nom_representant',
        'entreprise_signature',
        'lieu',
        'date_signature',
    ];
}
