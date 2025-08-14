@extends('admin.layouts.admin')
@section('title', 'Modifier Candidature Impact Féminin')
@section('content')

<div class="modern-admin-page">
    <!-- Header Section -->
    <div class="page-header">
        <div class="header-content">
            <div class="header-info">
                <div class="breadcrumb">
                    <a href="{{ route('admin.impact-feminin.index') }}">
                        <i class="material-icons">female</i>
                        Impact Féminin
                    </a>
                    <i class="material-icons">chevron_right</i>
                    <span>Modifier #{{ $candidature->id }}</span>
                </div>
                <h1 class="page-title">Modifier la candidature Impact Féminin</h1>
                <p class="page-subtitle">Modification des informations de la candidature</p>
            </div>
            <div class="header-actions">
                <a href="{{ route('admin.impact-feminin.show', $candidature->id) }}" class="btn-back">
                    <i class="material-icons">arrow_back</i>
                    Retour aux détails
                </a>
            </div>
        </div>
    </div>

    <!-- Edit Form -->
    <div class="edit-container">
        <form action="{{ route('admin.impact-feminin.update', $candidature->id) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')
            
            <!-- Informations Personnelles -->
            <div class="form-section">
                <div class="section-header">
                    <h3><i class="material-icons">person</i> Informations personnelles</h3>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nom">Nom *</label>
                        <input type="text" id="nom" name="nom" 
                               value="{{ old('nom', $candidature->nom) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="prenom">Prénom *</label>
                        <input type="text" id="prenom" name="prenom" 
                               value="{{ old('prenom', $candidature->prenom) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" 
                               value="{{ old('email', $candidature->email) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" 
                               value="{{ old('telephone', $candidature->telephone) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="societe">Société</label>
                        <input type="text" id="societe" name="societe" 
                               value="{{ old('societe', $candidature->societe) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="poste">Poste</label>
                        <input type="text" id="poste" name="poste" 
                               value="{{ old('poste', $candidature->poste) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="prix_choisi">Prix choisi</label>
                        <input type="text" id="prix_choisi" name="prix_choisi" 
                               value="{{ old('prix_choisi', $candidature->prix_choisi) }}">
                    </div>
                </div>
            </div>

            <!-- Informations Professionnelles -->
            <div class="form-section">
                <div class="section-header">
                    <h3><i class="material-icons">work</i> Informations professionnelles</h3>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="entreprise_organisation">Entreprise/Organisation</label>
                        <input type="text" id="entreprise_organisation" name="entreprise_organisation" 
                               value="{{ old('entreprise_organisation', $candidature->entreprise_organisation) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="poste">Poste</label>
                        <input type="text" id="poste" name="poste" 
                               value="{{ old('poste', $candidature->poste) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="secteur_activite">Secteur d'activité</label>
                        <input type="text" id="secteur_activite" name="secteur_activite" 
                               value="{{ old('secteur_activite', $candidature->secteur_activite) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="annees_experience">Années d'expérience</label>
                        <input type="number" id="annees_experience" name="annees_experience" 
                               value="{{ old('annees_experience', $candidature->annees_experience) }}">
                    </div>
                </div>
            </div>

            <!-- Nomination -->
            <div class="form-section">
                <div class="section-header">
                    <h3><i class="material-icons">star</i> Informations de nomination</h3>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="type_nomination">Type de nomination</label>
                        <select id="type_nomination" name="type_nomination">
                            <option value="">Sélectionner</option>
                            <option value="auto" {{ old('type_nomination', $candidature->type_nomination) == 'auto' ? 'selected' : '' }}>Auto-nomination</option>
                            <option value="autre" {{ old('type_nomination', $candidature->type_nomination) == 'autre' ? 'selected' : '' }}>Nominée par un tiers</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="nom_nomine">Nom du nominé</label>
                        <input type="text" id="nom_nomine" name="nom_nomine" 
                               value="{{ old('nom_nomine', $candidature->nom_nomine) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="relation_nomine">Relation avec le nominé</label>
                        <input type="text" id="relation_nomine" name="relation_nomine" 
                               value="{{ old('relation_nomine', $candidature->relation_nomine) }}">
                    </div>
                </div>
            </div>

            <!-- Détails de candidature -->
            <div class="form-section">
                <div class="section-header">
                    <h3><i class="material-icons">description</i> Détails de la candidature</h3>
                </div>
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label for="realisations_marquantes">Réalisations marquantes</label>
                        <textarea id="realisations_marquantes" name="realisations_marquantes" rows="4">{{ old('realisations_marquantes', $candidature->realisations_marquantes) }}</textarea>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="impact_social_economique">Impact social/économique</label>
                        <textarea id="impact_social_economique" name="impact_social_economique" rows="4">{{ old('impact_social_economique', $candidature->impact_social_economique) }}</textarea>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="innovation_creativite">Innovation/Créativité</label>
                        <textarea id="innovation_creativite" name="innovation_creativite" rows="4">{{ old('innovation_creativite', $candidature->innovation_creativite) }}</textarea>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="leadership">Leadership</label>
                        <textarea id="leadership" name="leadership" rows="4">{{ old('leadership', $candidature->leadership) }}</textarea>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="engagement_communautaire">Engagement communautaire</label>
                        <textarea id="engagement_communautaire" name="engagement_communautaire" rows="4">{{ old('engagement_communautaire', $candidature->engagement_communautaire) }}</textarea>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="defis_surmontes">Défis surmontés</label>
                        <textarea id="defis_surmontes" name="defis_surmontes" rows="4">{{ old('defis_surmontes', $candidature->defis_surmontes) }}</textarea>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="vision_future">Vision future</label>
                        <textarea id="vision_future" name="vision_future" rows="4">{{ old('vision_future', $candidature->vision_future) }}</textarea>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="autres_informations">Autres informations</label>
                        <textarea id="autres_informations" name="autres_informations" rows="4">{{ old('autres_informations', $candidature->autres_informations) }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="{{ route('admin.impact-feminin.show', $candidature->id) }}" class="btn-cancel">
                    <i class="material-icons">close</i>
                    Annuler
                </a>
                <button type="submit" class="btn-save">
                    <i class="material-icons">save</i>
                    Enregistrer les modifications
                </button>
            </div>
        </form>
    </div>
</div>

<style>
.modern-admin-page {
    padding: 2rem;
    background: #f8fafc;
    min-height: 100vh;
}

.page-header {
    background: white;
    border-radius: 16px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #64748b;
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.breadcrumb a {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    color: #3b82f6;
    text-decoration: none;
}

.page-title {
    font-size: 2rem;
    font-weight: 700;
    color: #1a202c;
    margin: 0 0 0.5rem 0;
}

.page-subtitle {
    color: #64748b;
    font-size: 1.1rem;
    margin: 0;
}

.btn-back {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: #f1f5f9;
    color: #475569;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.2s ease;
}

.btn-back:hover {
    background: #e2e8f0;
}

.edit-container {
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
    overflow: hidden;
}

.form-section {
    border-bottom: 1px solid #e5e7eb;
    padding: 2rem;
}

.form-section:last-child {
    border-bottom: none;
}

.section-header {
    margin-bottom: 2rem;
}

.section-header h3 {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1.2rem;
    font-weight: 600;
    color: #1a202c;
    margin: 0;
}

.section-header h3 i {
    color: #ec4899;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group.full-width {
    grid-column: 1 / -1;
}

.form-group label {
    font-weight: 600;
    color: #374151;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
}

.form-group input,
.form-group textarea,
.form-group select {
    padding: 0.75rem;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 0.9rem;
    transition: border-color 0.2s ease;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    outline: none;
    border-color: #ec4899;
    box-shadow: 0 0 0 3px rgba(236, 72, 153, 0.1);
}

.form-actions {
    padding: 2rem;
    background: #f8fafc;
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
}

.btn-cancel,
.btn-save {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    border-radius: 12px;
    font-weight: 500;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.2s ease;
    border: none;
}

.btn-cancel {
    background: #f1f5f9;
    color: #475569;
}

.btn-cancel:hover {
    background: #e2e8f0;
}

.btn-save {
    background: linear-gradient(135deg, #ec4899, #be185d);
    color: white;
}

.btn-save:hover {
    transform: translateY(-1px);
    box-shadow: 0 8px 25px rgba(236, 72, 153, 0.3);
}

@media (max-width: 768px) {
    .modern-admin-page {
        padding: 1rem;
    }
    
    .header-content {
        flex-direction: column;
        gap: 1rem;
    }
    
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .form-actions {
        flex-direction: column;
    }
}
</style>

@endsection
