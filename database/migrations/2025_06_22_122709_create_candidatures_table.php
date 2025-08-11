<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->string('nom_entreprise');
            $table->date('date_creation');
            $table->string('statut_juridique');
            $table->string('numero_rccm');
            $table->string('pays_ville_siege');
            $table->string('telephone_professionnel');
            $table->string('email_professionnel');
            $table->string('adresse_postale');
            $table->string('site_web')->nullable();
            $table->string('reseaux_sociaux')->nullable();
            $table->string('nom_responsable');
            $table->string('fonction_responsable');
            $table->string('email_responsable');
            $table->string('telephone_responsable');
            $table->string('secteur_activite');
            $table->text('produits_services');
            $table->integer('nombre_employes');
            $table->text('chiffre_affaires');
            $table->text('resultats_innovations');
            $table->text('certifications_labels');
            $table->text('projets_impact');
            $table->text('distinctions');
            $table->text('temoignages')->nullable();
            $table->string('brochure');
            $table->string('piece_identite');
            $table->string('logo_hd');
            $table->json('photos');
            $table->string('nom_representant');
            $table->string('entreprise_signature');
            $table->string('lieu');
            $table->date('date_signature');
            $table->string('signature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
