@extends('admin.layouts.admin')
@section('title', 'Modifier Candidature')
@section('content')

<div class="modern-admin-page">
    <!-- Header Section -->
    <div class="page-header">
        <div class="header-content">
            <div class="header-info">
                <div class="breadcrumb">
                    <a href="{{ route('admin.candidatures.index') }}">
                        <i class="material-icons">workspace_premium</i>
                        Candidatures
                    </a>
                    <i class="material-icons">chevron_right</i>
                    <span>Modifier #{{ $candidature->id }}</span>
                </div>
                <h1 class="page-title">Modifier la candidature</h1>
                <p class="page-subtitle">Modification des informations de la candidature Prix d'Excellence</p>
            </div>
            <div class="header-actions">
                <a href="{{ route('admin.candidatures.show', $candidature->id) }}" class="btn-back">
                    <i class="material-icons">arrow_back</i>
                    Retour aux détails
                </a>
            </div>
        </div>
    </div>

    <!-- Edit Form -->
    <div class="edit-container">
        <form action="{{ route('admin.candidatures.update', $candidature->id) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')
            
            <!-- Informations Entreprise -->
            <div class="form-section">
                <div class="section-header">
                    <h3><i class="material-icons">business</i> Informations de l'entreprise</h3>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nom_entreprise">Nom de l'entreprise *</label>
                        <input type="text" id="nom_entreprise" name="nom_entreprise" 
                               value="{{ old('nom_entreprise', $candidature->nom_entreprise) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="statut_juridique">Statut juridique</label>
                        <input type="text" id="statut_juridique" name="statut_juridique" 
                               value="{{ old('statut_juridique', $candidature->statut_juridique) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="numero_rccm">Numéro RCCM</label>
                        <input type="text" id="numero_rccm" name="numero_rccm" 
                               value="{{ old('numero_rccm', $candidature->numero_rccm) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="pays_ville_siege">Pays/Ville du siège</label>
                        <input type="text" id="pays_ville_siege" name="pays_ville_siege" 
                               value="{{ old('pays_ville_siege', $candidature->pays_ville_siege) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="produits_services">Produits et services</label>
                        <input type="text" 
                               id="produits_services" 
                               name="produits_services" 
                               class="form-control"
                               value="{{ old('produits_services', $candidature->produits_services) }}"
                               placeholder="Ex: Services informatiques, consultation, formation...">
                    </div>
                    
                    <div class="form-group">
                        <label for="chiffre_affaires">Chiffre d'affaires</label>
                        <input type="text" id="chiffre_affaires" name="chiffre_affaires" 
                               value="{{ old('chiffre_affaires', $candidature->chiffre_affaires) }}">
                    </div>
                </div>
            </div>

            <!-- Informations Responsable -->
            <div class="form-section">
                <div class="section-header">
                    <h3><i class="material-icons">person</i> Responsable de la candidature</h3>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nom_responsable">Nom du responsable *</label>
                        <input type="text" id="nom_responsable" name="nom_responsable" 
                               value="{{ old('nom_responsable', $candidature->nom_responsable) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="fonction_responsable">Fonction</label>
                        <input type="text" id="fonction_responsable" name="fonction_responsable" 
                               value="{{ old('fonction_responsable', $candidature->fonction_responsable) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="email_responsable">Email *</label>
                        <input type="email" id="email_responsable" name="email_responsable" 
                               value="{{ old('email_responsable', $candidature->email_responsable) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telephone_responsable">Téléphone</label>
                        <input type="tel" id="telephone_responsable" name="telephone_responsable" 
                               value="{{ old('telephone_responsable', $candidature->telephone_responsable) }}">
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="{{ route('admin.candidatures.show', $candidature->id) }}" class="btn-cancel">
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
    color: #3b82f6;
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
.form-group textarea {
    padding: 0.75rem;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 0.9rem;
    transition: border-color 0.2s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.form-help {
    display: block;
    margin-top: 0.5rem;
    font-size: 0.8rem;
    color: #6b7280;
    font-style: italic;
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
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    color: white;
}

.btn-save:hover {
    transform: translateY(-1px);
    box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
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
